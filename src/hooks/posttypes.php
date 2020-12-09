<?php

/**
 * Apollon posts hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.posttypes_contents', function ($posttype, $usecontent = false, $field = 'elements') {
    // Get vars from DB
    $elements   = apollonGetOption('layout_'.$posttype.'_'.$field);
    $metas      = apollonGetOption('layout_'.$posttype.'_metas');
    $usecontent = $usecontent ? apollonGetOption('layout_'.$posttype.'_usecontent') : false;

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
}, 10, 3);

add_filter('ol.apollon.posttypes_options', function ($posttype) {
    return [
        // From list
        'gridgap'    => apollonGetOption('layout_'.$posttype.'s_gridgap'),

        // From single
        'container'  => apollonGetOption('layout_'.$posttype.'_container'),
        'content'    => apollonGetOption('layout_'.$posttype.'_content'),
        'feature'    => apollonGetOption('layout_'.$posttype.'_feature'),
        'extend'     => apollonGetOption('layout_'.$posttype.'_extend'),
        'header'     => apollonGetOption('layout_'.$posttype.'_header'),
        'sidebarpos' => apollonGetOption('layout_'.$posttype.'_sidebarpos'),
        'sidebar1'   => apollonGetOption('layout_'.$posttype.'_sidebar1'),
        'sidebar2'   => apollonGetOption('layout_'.$posttype.'_sidebar2'),
        'sidebars'   => apollonGetOption('layout_'.$posttype.'_sidebars'),
    ];
});

add_filter('ol.apollon.posttypes_social', function ($options, $data) {
    if (!isset($data['link'])) {
        return '';
    }

    // Options
    $options = array_merge([
        'before'      => '<ul class="uk-iconnav">',
        'before_item' => '<li>',
        'after_item'  => '</li>',
        'after'       => '</ul>',
    ], $options);

    // Socials button
    $social = [
        'twitter'     => 'https://twitter.com/share?text=%TITLE%&amp;url=%LINK%',
        'facebook'    => 'https://www.facebook.com/sharer.php?u=%LINK%',
        'google-plus' => 'https://plus.google.com/share?url=%LINK%',
        'pinterest'   => 'https://www.pinterest.com/pin/create/button/?url=%LINK%&amp;media=%IMG%&amp;description=%TITLE%',
        'linkedin'    => 'https://www.linkedin.com/shareArticle?mini=true&amp;url=%LINK%&amp;title=%TITLE%',
        'reddit'      => 'https://www.reddit.com/submit?url=%LINK%&amp;title=%TITLE%',
        'tumblr'      => 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=%LINK%',
        'whatsapp'    => 'whatsapp://send?text=%LINK%',
    ];

    // Content
    $content = [
        'link'  => urlencode($data['link']),
        'title' => urlencode($data['title']),
        'image' => empty($data['images']) ? '' : $data['images']['src'],
    ];

    $list = $options['before'];

    // Iterate
    foreach ($social as $icon => $url) {
        $list .= $options['before_item'];

        $list .= sprintf(
            '<a href="%s" title="%s" uk-icon="icon:%s" target="_blank"></a>',
            str_replace(
                [
                    '%LINK%',
                    '%TITLE%',
                    '%IMG%'
                ],
                [
                    $content['link'],
                    $content['title'],
                    $content['image']
                ],
                $url
            ),
            __('apollon.th.share.'.$icon, OL_APOLLON_DICTIONARY),
            $icon
        );

        $list .= $options['after_item'];
    }

    $list .= $options['after'];

    return $list;
}, 10, 2);

add_filter('ol.apollon.posttypes_template', function ($posttype) {
    return apollonGetOption('layout_'.$posttype.'_template');
});

add_filter('ol.apollon.posttypes_vars', function ($vars = []) {
    // Set data
    $vars = array_merge([
        'id'           => get_the_ID(),

        'content'      => '',
        'excerpt'      => get_the_excerpt(),
        'has_thumb'    => has_post_thumbnail(),
        'link'         => get_permalink(),
        'postformat'   => get_post_format() ?: 'default',
        'title'        => get_the_title(),

        'avatar'       => 22,
        'cats_link'    => true,
        'image_css'    => 'uk-img uk-width-1-1',
        'date'         => 'j.m.Y - H:i',
        'display'      => 'default',
        'length'       => 20,
        'thumbnail'    => 'large',

        'get_author'   => true,
        'get_comments' => true,
        'get_content'  => true,
        'get_dates'    => true,
        'get_excerpt'  => true,
        'get_terms'    => true,
        'get_thumb'    => true,

        'author'       => [],
        'categories'   => [],
        'comments'     => [],
        'dates'        => [],
        'images'       => [],
        'tags'         => [],
    ], $vars);

    // Build post type
    $vars['posttype'] = !isset($vars['posttype']) ? get_post_type() : $vars['posttype'];
    $vars['posttype'] = empty($vars['posttype']) ? 'post' : $vars['posttype'];

    // Build title and link
    $vars['esc_title'] = esc_html($vars['title']);
    $vars['esc_link']  = urlencode($vars['link']);

    // Build content
    if ($vars['get_content']) {
        $vars['content'] = get_the_content();
    }

    // Build excerpt
    if ($vars['get_excerpt']) {
        $vars['excerpt'] = $vars['length'] ? wp_trim_words($vars['excerpt'], $vars['length'], '...') : $vars['excerpt'];
    } else {
        $vars['excerpt'] = '';
    }

    // Build post format & type
    // ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']
    $vars['postformat'] = in_array($vars['postformat'], ['image']) ? $vars['postformat'] : 'default';

    // Build terms
    if ($vars['get_terms']) {
        $vars['categories'] = get_the_category($vars['id']);
        $vars['tags']       = get_the_term_list($vars['id'], 'post_tag', '', ', ');


        /**
         * Build categories.
         * @see hook ol.apollon.build_categories
         */
        $vars['categories'] = apply_filters('ol.apollon.build_categories', $vars['categories'], $vars['cats_link']);
    }

    // Build images
    if ($vars['has_thumb'] && $vars['get_thumb']) {
        $vars['images']['thumbnail'] = get_the_post_thumbnail($vars['id'], $vars['thumbnail'], [
            'alt'       => $vars['esc_title'],
            'itemprop'  => 'contentURL',
            'class'     => $vars['image_css'],
        ]);

        $vars['images']['full'] = 'full' === $vars['thumbnail']
            ? $vars['images']['thumbnail']
            : get_the_post_thumbnail($vars['id'], 'full', [
                'alt'       => $vars['esc_title'],
                'itemprop'  => 'contentURL',
                'class'     => $vars['image_css'],
            ]);

        // Extract image src attribute
        preg_match('/src="([^"]*)"/i', $vars['images']['thumbnail'], $img);
        $vars['images']['src'] = !empty($img) ? $img[1] : '';

        // Extract image src attribute from full
        preg_match('/src="([^"]*)"/i', $vars['images']['full'], $imgorig);
        $vars['images']['src-orig'] = !empty($imgorig) ? $imgorig[1] : '';

        // Extract image width attribute
        preg_match('/width="([^"]*)"/i', $vars['images']['thumbnail'], $width);
        $vars['images']['width'] = !empty($width) ? $width[1] : '';

        // Extract image height attribute
        preg_match('/height="([^"]*)"/i', $vars['images']['thumbnail'], $height);
        $vars['images']['height'] = !empty($height) ? $height[1] : '';

        // Freedom
        unset($img);
        unset($imgorig);
        unset($width);
        unset($height);
    }

    // Build author details
    if ($vars['get_author']) {
        $author_id  = get_post_field('post_author', $vars['id']);

        $vars['author'] = [
            'desc'   => get_the_author_meta('description', $author_id),
            'link'   => get_author_posts_url($author_id),
            'name'   => get_the_author_meta('display_name', $author_id),
            'avatar' => [],
        ];

        if ($vars['avatar']) {
            $vars['author']['avatar'] = get_avatar_data(get_the_author_meta('user_email', $author_id), [
                'size' => $vars['avatar'],
            ]);
        }

        // Freedom
        unset($author_id);
    }

    // Build dates
    if ($vars['get_dates']) {
        $vars['dates'] = [
            'c'     => get_the_date('c'),
            'long'  => get_the_date($vars['date']),
        ];
    }

    // Build comments
    if ($vars['get_comments']) {
        $vars['comments'] = [
            'count' => get_comments_number($vars['id']),
            'link'  => get_comments_link($vars['id']),
        ];
    }

    // Build readingtime
    $vars['readingtime'] = get_post_meta($vars['id'], $vars['posttype'].'-readingtime', true);
    $vars['readingtime'] = !$vars['readingtime'] ? 0 : (int) $vars['readingtime'];


    /**
     * Override global post types vars.
     *
     * @return array
     */
    return apply_filters('ol.apollon.posttypes_global_vars', $vars);
});

// INCLUDES

include __DIR__.S.'posttypes'.S.'pages.php';
include __DIR__.S.'posttypes'.S.'posts.php';
include __DIR__.S.'posttypes'.S.'singles.php';