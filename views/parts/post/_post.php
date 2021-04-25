<?php

/**
 * Post part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_post)) {
    die('You are not authorized to directly access to this page');
}

the_post();

// Content starts
$_post = array_merge([
    'available' => [],
    'contents'  => [],
    'data'      => [],
    'type'      => 'post',
], $_post);


/**
 * Override available posttypes post.
 *
 * @return array
 */
$_post['available'] = apply_filters('ol.apollon.post_available_files', [
    'post'
]);

if (empty($_post['type']) || !in_array($_post['type'], $_post['available'])) {
    $_post['type'] = $_post['available'][0];
}

$_post['filename'] = $_post['type'].'.php';


/**
 * Override post vars.
 *
 * @return array
 */
$_post = apply_filters('ol.apollon.post_vars', $_post);


/**
 * Fires before displaying post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_before', $_post);

// Include template
include __DIR__.S.$_post['filename'];


/**
 * Fires after displaying post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_after', $_post);
