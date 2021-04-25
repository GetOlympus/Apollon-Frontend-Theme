<?php

/**
 * Widget
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_widget = isset($args) ? $args : [];


/**
 * Fires before displaying widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_before', $_widget);

// Include template
include __DIR__.S.'widget'.S.'_widget.php';


/**
 * Fires after displaying widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_after', $_widget);

// Freedom
unset($_widget);
