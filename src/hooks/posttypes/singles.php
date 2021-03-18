<?php

/**
 * Apollon singles hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.single_contents', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_contents', $posttype, false, 'contents');
});

add_filter('ol.apollon.single_options', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_options', $posttype);
});

add_filter('ol.apollon.single_template', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_template', $posttype);
});

add_filter('ol.apollon.single_vars', function ($single = []) {
    // Set post type
    $posttype = isset($single['posttype']) ? $single['posttype'] : (get_post_type() ?: 'post');

    // Update data
    $single['data'] = apply_filters('ol.apollon.posttypes_vars', [
        'avatar'      => apollonGetOption($posttype.'-avatar') ? 22 : 0,
        'get_content' => false,
        'length'      => false,
        'posttype'    => $posttype,
        'thumbnail'   => 'large',
    ]);


    /**
     * Check whether single contents to display.
     *
     * @param  string  $posttype
     *
     * @return string
     */
    $single['contents'] = apply_filters('ol.apollon.single_contents', $single['data']['posttype']);


    /**
     * Override single template.
     *
     * @param  string  $posttype
     *
     * @return string
     */
    $single['template'] = apply_filters('ol.apollon.single_template', $single['data']['posttype']);

    return $single;
});
