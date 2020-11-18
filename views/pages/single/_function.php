<?php

/**
 * Single function
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($single)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build single data.
 *
 * @param  array   $data
 *
 * @return array
 */
add_filter('ol.apollon.single_build_data', function ($data = []) {
    // Build defaults data
    $data = array_merge([
        'id'         => get_the_ID(),

        'excerpt'    => get_the_excerpt(),
        'has_thumb'  => has_post_thumbnail(),
        'link'       => get_permalink(),
        'postformat' => get_post_format() ?: 'default',
        'title'      => get_the_title(),

        'avatar'     => 22,
        'image_css'  => 'blog-featured',
        'date'       => 'j.m.Y - H:i',
        'display'    => 'default',
        'length'     => false,
        'thumbnail'  => 'medium',

        'author'     => [],
        'categories' => [],
        'dates'      => [],
        'images'     => [],
        'tags'       => [],
    ], $data);


    // Build details
    $data['esc_title'] = esc_html($data['title']);
    $data['esc_link']  = urlencode($data['link']);
    $data['excerpt']   = $data['length'] ? wp_trim_words($data['excerpt'], $data['length'], '...') : $data['excerpt'];


    // Build terms
    $data['categories'] = get_the_category($data['id']);
    $data['tags']       = get_the_term_list($data['id'], 'post_tag', '', ', ');


    // Build format
    $postformats = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];
    $data['postformat'] = in_array($data['postformat'], $postformats) ? $data['postformat'] : 'default';


    // Build images
    if ($data['has_thumb']) {
        $data['images']['thumbnail'] = get_the_post_thumbnail($data['id'], $data['thumbnail'], [
            'alt'       => $data['esc_title'],
            'itemprop'  => 'contentURL',
            'class'     => $data['image_css'],
            'style'     => 'width:100%',
        ]);

        $data['images']['original'] = 'original' === $data['thumbnail']
            ? $data['images']['thumbnail']
            : get_the_post_thumbnail($data['id'], 'original', [
                'alt'       => $data['esc_title'],
                'itemprop'  => 'contentURL',
                'class'     => $data['image_css'],
            ]);

        // Extract image src attribute
        preg_match('/src="([^"]*)"/i', $data['images']['thumbnail'], $img);
        $data['images']['src'] = !empty($img) ? $img[1] : '';

        // Freedom
        unset($img);
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


    // Build dates
    $data['dates'] = [
        'c'     => get_the_date('c'),
        'long'  => get_the_date($data['date']),
    ];


    /**
     * Check whether post single to display.
     *
     * @param  string
     *
     * @return string
     */
    $data['display'] = apply_filters('ol.apollon.single_post_display', 'default');


    // Freedom
    unset($author_id);
    unset($author_img);
    unset($postformats);


    return $data;
});
