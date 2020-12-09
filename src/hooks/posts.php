<?php

/**
 * Apollon posts hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// POSTS

add_filter('ol.apollon.post_contents', function ($posttype) {
    // Get vars from DB
    $elements   = apollonGetOption('layout_'.$posttype.'s_elements');
    $metas      = apollonGetOption('layout_'.$posttype.'s_metas');
    $usecontent = apollonGetOption('layout_'.$posttype.'s_usecontent');

    $return = [];

    // Iterate on elements
    foreach ($elements as $element) {
        $element = 'excerpt' === $element && $usecontent ? 'content' : $element;
        $return[$element] = [];

        if ('metas' === $element) {
            // Iterate on metas
            foreach ($metas as $meta) {
                $return[$element][$meta] = [];
            }
        }
    }

    return $return;
});

add_filter('ol.apollon.post_template', function ($posttype) {
    return apollonGetOption('layout_'.$posttype.'s_template');
});

add_filter('ol.apollon.post_vars', function ($post = []) {
    $post['data'] = isset($post['data']) ? $post['data'] : [];

    // Build defaults data
    $data = array_merge([
        'id'         => get_the_ID(),

        'content'    => get_the_content(),
        'excerpt'    => get_the_excerpt(),
        'has_thumb'  => has_post_thumbnail(),
        'link'       => get_permalink(),
        'postformat' => get_post_format() ?: 'default',
        'title'      => get_the_title(),
        'posttype'   => get_post_type() ?: 'post',

        'avatar'     => 22,
        'image_css'  => 'blog-featured uk-width-1-1',
        'date'       => 'j.m.Y - H:i',
        'display'    => 'default',
        'length'     => 20,
        'thumbnail'  => 'thumbnail',

        'author'     => [],
        'categories' => [],
        'comments'   => [],
        'dates'      => [],
        'images'     => [],
        'tags'       => [],
    ], $post['data']);


    // Data details
    $data['length']    = apollonGetOption('layout_'.$data['posttype'].'s_excerpt');
    $data['thumbnail'] = apollonGetOption('layout_'.$data['posttype'].'s_thumbnail');
    $data['linkable']  = apollonGetOption('layout_'.$data['posttype'].'s_categorylink');


    // Build details
    $data['esc_title'] = esc_html($data['title']);
    $data['esc_link']  = urlencode($data['link']);
    $data['excerpt']   = $data['length'] ? wp_trim_words($data['excerpt'], $data['length'], '...') : $data['excerpt'];


    // Build terms
    $data['categories'] = get_the_category($data['id']);
    $data['tags']       = get_the_term_list($data['id'], 'post_tag', '', ', ');


    /**
     * Build categories.
     * @see hook ol.apollon.build_categories
     */
    $data['categories'] = apply_filters('ol.apollon.build_categories', $data['categories'], $data['linkable']);


    // Build format
    //$postformats = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];
    $postformats = ['image'];
    $data['postformat'] = in_array($data['postformat'], $postformats) ? $data['postformat'] : 'default';

    // Freedom
    unset($postformats);


    // Build images
    if ($data['has_thumb']) {
        $data['images']['thumbnail'] = get_the_post_thumbnail($data['id'], $data['thumbnail'], [
            'alt'       => $data['esc_title'],
            'itemprop'  => 'contentURL',
            'class'     => $data['image_css'],
        ]);

        $data['images']['full'] = 'full' === $data['thumbnail']
            ? $data['images']['thumbnail']
            : get_the_post_thumbnail($data['id'], 'full', [
                'alt'       => $data['esc_title'],
                'itemprop'  => 'contentURL',
                'class'     => $data['image_css'],
            ]);

        // Extract image src attribute
        preg_match('/src="([^"]*)"/i', $data['images']['thumbnail'], $img);
        $data['images']['src'] = !empty($img) ? $img[1] : '';

        // Extract image src attribute from full
        preg_match('/src="([^"]*)"/i', $data['images']['full'], $imgorig);
        $data['images']['src-orig'] = !empty($imgorig) ? $imgorig[1] : '';

        // Extract image width attribute
        preg_match('/width="([^"]*)"/i', $data['images']['thumbnail'], $width);
        $data['images']['width'] = !empty($width) ? $width[1] : '';

        // Extract image height attribute
        preg_match('/height="([^"]*)"/i', $data['images']['thumbnail'], $height);
        $data['images']['height'] = !empty($height) ? $height[1] : '';

        // Freedom
        unset($img);
        unset($imgorig);
        unset($width);
        unset($height);
    }


    // Build author details
    $author_id  = get_post_field('post_author', $data['id']);
    $author_img = get_avatar_data(get_the_author_meta('user_email', $author_id), [
        'size' => $data['avatar'],
    ]);

    $data['author'] = [
        'link'   => get_author_posts_url($author_id),
        'name'   => get_the_author_meta('display_name', $author_id),
        'avatar' => [
            'full' => $author_img,
            'url'  => $author_img['url'],
        ],
    ];

    // Freedom
    unset($author_id);
    unset($author_img);


    // Build dates
    $data['dates'] = [
        'c'     => get_the_date('c'),
        'long'  => get_the_date($data['date']),
    ];


    // Build comments
    $data['comments'] = [
        'count' => get_comments_number($data['id']),
        'link'  => get_comments_link($data['id']),
    ];


    // Build posttype
    $data['posttype'] = empty($data['posttype']) || !in_array($data['posttype'], $post['available'])
        ? 'post'
        : $data['posttype'];


    // Build readingtime
    $data['readingtime'] = get_post_meta($data['id'], $data['posttype'].'-readingtime', true);
    $data['readingtime'] = !$data['readingtime'] ? 0 : (int) $data['readingtime'];


    // Update data
    $post['data'] = $data;


    /**
     * Check whether post post to display.
     *
     * @param  string  $posttype
     *
     * @return string
     */
    $post['contents'] = apply_filters('ol.apollon.post_contents', $post['data']['posttype']);


    /**
     * Override post template.
     *
     * @param  string  $posttype
     *
     * @return string
     */
    $post['template'] = apply_filters('ol.apollon.post_template', $post['data']['posttype']);

    return $post;
});

// POST CONTENTS

/*add_action('ol.apollon.post_default_post_content', function ($post) {
    // Get post format
    apollonGetPart('format.php', [
        'template' => $post['template'],
        'vars'     => $post,
    ]);
});

add_action('ol.apollon.post_default_image_content', function ($post) {
    // Get post format
    apollonGetPart('format.php', [
        'template' => $post['template'],
        'vars'     => $post,
    ]);
});*/
