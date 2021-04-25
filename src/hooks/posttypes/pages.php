<?php

/**
 * Apollon pages hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.page_contents', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_contents', $posttype, false);
});

add_filter('ol.apollon.page_options', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_options', $posttype);
});

add_filter('ol.apollon.page_template', function ($posttype) {
    return apply_filters('ol.apollon.posttypes_template', $posttype);
});

add_filter('ol.apollon.page_vars', function ($page = []) {
    // Set post type
    $posttype = isset($page['posttype']) ? $page['posttype'] : (get_post_type() ?: 'post');

    // Update data
    $page['data'] = apply_filters('ol.apollon.posttypes_vars', [
        'avatar'      => 0,
        'get_content' => false,
        'get_terms'   => false,
        'length'      => false,
        'posttype'    => 'page',
        'thumbnail'   => 'large',
    ]);


    /**
     * Check whether page contents to display.
     *
     * @param  string  $posttype
     *
     * @return string
     */
    $page['contents'] = apply_filters('ol.apollon.page_contents', 'page');

    return $page;
});

// Pages

add_action('ol.apollon.page_front_before', function ($options) {
    add_filter('ol.apollon.body_wrapper_open', function ($header) {
        $default = apollonGetOption('frontpage-use-default');
        $target  = $default ? 'website' : 'frontpage';

        $container = apollonGetOption($target.'-container');
        $padding   = apollonGetOption($target.'-padding');

        return sprintf(
            '<div class="uk-container uk-container-%s%s">',
            $container,
            $padding ? '' : ' uk-padding-remove'
        );
    });
});
