<?php

/**
 * Header
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_header = isset($args) ? $args : [];


/**
 * Fires before displaying header.
 *
 * @param  array   $_header
 */
do_action('ol.apollon.header_before', $_header);

// Include template
include __DIR__.S.'header'.S.'_header.php';


/**
 * Fires after displaying header.
 *
 * @param  array   $_header
 */
do_action('ol.apollon.header_after', $_header);

// Freedom
unset($_header);
