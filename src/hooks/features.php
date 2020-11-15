<?php

/**
 * Apollon features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// FEATURES

add_filter('ol.apollon.searchform_start', function ($status) {
    return (bool) !!apollonGetOption('searchform_enable');
});
add_filter('ol.apollon.sidebar_start', function ($status) {
    return (bool) !!apollonGetOption('sidebar_enable');
});
add_filter('ol.apollon.comments_start', function ($status) {
    return (bool) !!apollonGetOption('comments_enable');
});
add_filter('ol.apollon.nav_start', function ($status) {
    return (bool) !!apollonGetOption('navs_enable');
});
add_filter('ol.apollon.ads_start', function ($status) {
    return (bool) !!apollonGetOption('ads_enable');
});
add_filter('ol.apollon.adblocker_start', function ($status) {
    return (bool) !!apollonGetOption('adblocker_enable');
});


// ARCHIVES

add_filter('ol.apollon.archive_sidebar_order', function ($tpl) {
    return /*isset($apollon['features-sidebar-'.$tpl.'-order'])
        ? $apollon['features-sidebar-'.$tpl.'-order']
        : */[];
});


// COMMENTS

add_filter('ol.apollon.comments_build_default_data', function ($data, $mode = 'data') {
    $build = 'data' === $mode ? [
        'htmltags'     => [],//$apollon['features-comments-htmltags'],
        'stacked'      => [],//$apollon['features-comments-formstacked'],
        'website'      => [],//$apollon['features-comments-website'],
        'commenttitle' => [],//$apollon['features-comments-title'],
        'formposition' => [],//$apollon['features-comments-formposition'],
        'navsposition' => [],//$apollon['features-comments-navsposition'],
    ] : [
        'avatar'       => [],//$apollon['features-comments-avatar'],
        'highlight'    => [],//$apollon['features-comments-highlight'],
    ];

    return array_merge($build, $data);
}, 10, 2);
add_filter('ol.apollon.comments_default_contents', function ($contents) {
    return [
        'template' => apply_filters('ol.apollon.comments_list_display', 'default'),
    ];
});
add_filter('ol.apollon.comments_form_display', function ($tpl) {
    return apollonGetOption('comments_formlayout');
});
add_filter('ol.apollon.comments_list_display', function ($tpl) {
    return apollonGetOption('comments_listlayout');
});
