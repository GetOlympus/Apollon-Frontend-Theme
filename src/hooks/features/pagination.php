<?php

/**
 * Apollon pagination features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// PAGINATION

add_filter('ol.apollon.pagination_options', function ($options) {
    return [
        'title'         => apollonGetOption('pagination_title'),
        'first'         => apollonGetOption('pagination_first'),
        'previous'      => apollonGetOption('pagination_previous'),
        'next'          => apollonGetOption('pagination_next'),
        'last'          => apollonGetOption('pagination_last'),
        'icons'         => apollonGetOption('pagination_icons'),
        'range'         => apollonGetOption('pagination_range'),
        'separator'     => apollonGetOption('pagination_separator'),
        'position'      => apollonGetOption('pagination_position'),
        'infinitelabel' => apollonGetOption('pagination_infinitelabel'),
        'nums'          => apollonGetOption('pagination_nums'),
    ];
});
