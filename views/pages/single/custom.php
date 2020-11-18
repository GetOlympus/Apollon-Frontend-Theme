<?php

/**
 * Single post custom part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_single)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build single data.
 *
 * @param  array   $data
 *
 * @return array
 */
$_single_item = apply_filters('ol.apollon.single_build_data', [
    'labels' => [
        'by' => __('by', OL_APOLLON_DICTIONARY),
        'on' => __('on', OL_APOLLON_DICTIONARY),
    ],
    'thumbnail' => 'original',
]);


/**
 * Fires before displaying single custom post.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_custom_before', $_single_item);

get_header();

// Include sub template
include __DIR__.S.'postformat'.S.'default.php';

get_footer();


/**
 * Fires after displaying single custom post.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_custom_after', $_single_item);

// Freedom
unset($_single_item);
