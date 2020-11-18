<?php

/**
 * Format post part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build format data.
 * @see hook ol.apollon.format_build_data
 */
$_format_item = apply_filters('ol.apollon.format_build_data', [
    'labels' => [
        'by' => __('by', OL_APOLLON_DICTIONARY),
        'on' => __('on', OL_APOLLON_DICTIONARY),
    ],
]);


/**
 * Fires before displaying post format.
 *
 * @param  array   $_format_item
 */
do_action('ol.apollon.format_post_before', $_format_item);

// Include template
include __DIR__.S.'postformat'.S.$_format_item['postformat'].'.php';


/**
 * Fires after displaying post format.
 *
 * @param  array   $_format_item
 */
do_action('ol.apollon.format_post_after', $_format_item);

// Freedom
unset($_format_item);
