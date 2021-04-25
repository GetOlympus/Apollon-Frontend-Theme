<?php

/**
 * Format
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_format = isset($args) ? $args : [];


/**
 * Fires before displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_before', $_format);

// Include template
include __DIR__.S.'format'.S.'_format.php';


/**
 * Fires after displaying format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_after', $_format);

// Freedom
unset($_format);
