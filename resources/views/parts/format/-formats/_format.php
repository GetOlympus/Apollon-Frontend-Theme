<?php

/**
 * Format start
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$postformat = get_post_type() ? : 'image';
$postformat = in_array($postformat, ['image']) ? $postformat : 'image';

$_format = [
    'template' => $postformat.'.php',
];

/**
 * Fires before displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_before', $_format);

// include template
include __DIR__.S.$_format['template'];

/**
 * Fires after displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_after', $_format);

// Freedom
unset($_format);
unset($postformat);
