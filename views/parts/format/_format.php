<?php

/**
 * Format part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}

the_post();

// Content starts
$_format = array_merge([
    'contents' => [],
    'data'     => [],
    'template' => 'default',
], $_format);


/**
 * Override available posttypes format.
 *
 * @return array
 */
$_format['available'] = apply_filters('ol.apollon.format_available_files', [
    'default', 'cover', 'horizontal', 'text', 'vertical'
]);

if (empty($_format['template']) || !in_array($_format['template'], $_format['available'])) {
    $_format['template'] = $_format['available'][0];
}

$_format['filename'] = $_format['template'].'.php';


/**
 * Override format vars.
 *
 * @return array
 */
$_format = apply_filters('ol.apollon.format_vars', $_format);


/**
 * Fires before displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_before', $_format);

// Include template
include __DIR__.S.$_format['filename'];


/**
 * Fires after displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_after', $_format);
