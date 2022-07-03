<?php

/**
 * Apollon pagination features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.pagination_options', function ($options) {
    return [
        'first'          => apollonGetOption('pagination-first'),
        'previous'       => apollonGetOption('pagination-previous'),
        'next'           => apollonGetOption('pagination-next'),
        'last'           => apollonGetOption('pagination-last'),
        'icons'          => apollonGetOption('pagination-icons'),
        'range'          => apollonGetOption('pagination-range'),
        'separator'      => apollonGetOption('pagination-separator'),
        'nums'           => apollonGetOption('pagination-nums'),
        'template'       => apollonGetOption('pagination-template'),
        'position'       => apollonGetOption('pagination-position'),
        'title'          => apollonGetOption('pagination-title'),
        'infinite-label' => apollonGetOption('pagination-infinite-label'),
    ];
});
