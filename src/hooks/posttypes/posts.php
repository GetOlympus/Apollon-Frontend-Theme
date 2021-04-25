<?php

/**
 * Apollon posts hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.post_contents', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_contents', $posttype.'-loop', true);
});

add_filter('ol.apollon.post_options', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_options', $posttype);
});

add_filter('ol.apollon.post_template', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_template', $posttype);
});

add_filter('ol.apollon.post_vars', function ($post = []) {
    // Set post type
    $posttype = isset($post['posttype']) ? $post['posttype'] : (get_post_type() ?: 'post');

    // Update data
    $post['data'] = apply_filters('ol.apollon.posttypes_vars', [
        'avatar'    => 22,
        'length'    => apollonGetOption($posttype.'-loop-excerpt', 20),
        'posttype'  => $posttype,
        'thumbnail' => apollonGetOption($posttype.'-loop-thumbnail', 'thumbnail'),
    ]);


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
