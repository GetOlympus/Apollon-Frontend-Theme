<?php

/**
 * Apollon features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.searchform_start', function ($status) {
    return (bool) !!apollonGetOption('searchform-enable');
});
add_filter('ol.apollon.sidebar_start', function ($status) {
    return (bool) !!apollonGetOption('sidebar-enable');
});
add_filter('ol.apollon.comments_start', function ($status) {
    return (bool) !!apollonGetOption('comments-enable');
});
add_filter('ol.apollon.social_start', function ($status) {
    return (bool) !!apollonGetOption('social-enable');
});
add_filter('ol.apollon.backtotop_start', function ($status) {
    return (bool) !!apollonGetOption('backtotop-enable');
});
add_filter('ol.apollon.pagination_start', function ($status) {
    return (bool) !!apollonGetOption('pagination-enable');
});
add_filter('ol.apollon.breadcrumb_start', function ($status) {
    return (bool) !!apollonGetOption('breadcrumb-enable');
});
add_filter('ol.apollon.navs_start', function ($status) {
    return (bool) !!apollonGetOption('navs-enable');
});
add_filter('ol.apollon.ads_start', function ($status) {
    return (bool) !!apollonGetOption('ads-enable');
});
add_filter('ol.apollon.adblocker_start', function ($status) {
    return (bool) !!apollonGetOption('adblocker-enable');
});

// INCLUDES

include __DIR__.S.'features'.S.'archives.php';
include __DIR__.S.'features'.S.'backtotop.php';
include __DIR__.S.'features'.S.'comments.php';
include __DIR__.S.'features'.S.'pagination.php';
