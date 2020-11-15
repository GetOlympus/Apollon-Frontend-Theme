<?php

/**
 * Single post part
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
 * @see hook ol.apollon.single_build_data
 */
$_single_item = apply_filters('ol.apollon.single_build_data', [
    'labels' => [
        'by' => __('by', OL_APOLLON_LANGUAGESPATH),
        'on' => __('on', OL_APOLLON_LANGUAGESPATH),
    ],
    'thumbnail' => 'original',
]);


/**
 * Fires before displaying single post.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_before', $_single_item);

get_header();

// Include sub template
include __DIR__.S.'postformat'.S.$_single_item['postformat'].'.php';

get_footer();


/**
 * Fires after displaying single post.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_after', $_single_item);

// Freedom
unset($_single_item);
