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

// Include functions
include __DIR__.S.'_function.php';

the_post();

// Content starts
$_format = array_merge([
    'template' => 'post', //'template' => get_post_type() ?: 'post',
], $_format);


/**
 * Override available format templates.
 *
 * @return array
 */
$_format['available'] = apply_filters('ol.apollon.format_available_files', [
    'post'
]);

if (empty($_format['template']) || !in_array($_format['template'], $_format['available'])) {
    return;
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
