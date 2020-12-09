<?php

/**
 * Apollon features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.searchform_start', function ($status) {
    return (bool) !!apollonGetOption('searchform_enable');
});
add_filter('ol.apollon.sidebar_start', function ($status) {
    return (bool) !!apollonGetOption('sidebar_enable');
});
add_filter('ol.apollon.comments_start', function ($status) {
    return (bool) !!apollonGetOption('comments_enable');
});
add_filter('ol.apollon.backtotop_start', function ($status) {
    return (bool) !!apollonGetOption('backtotop_enable');
});
add_filter('ol.apollon.pagination_start', function ($status) {
    return (bool) !!apollonGetOption('pagination_enable');
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

// INCLUDES

include __DIR__.S.'features'.S.'archives.php';
include __DIR__.S.'features'.S.'backtotop.php';
include __DIR__.S.'features'.S.'comments.php';
include __DIR__.S.'features'.S.'pagination.php';
