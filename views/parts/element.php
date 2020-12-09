<?php

/**
 * Element
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_element = isset($args) ? $args : [];


/**
 * Fires before displaying element.
 *
 * @param  array   $_element
 */
do_action('ol.apollon.element_before', $_element);

// Include template
include __DIR__.S.'element'.S.'_element.php';


/**
 * Fires after displaying element.
 *
 * @param  array   $_element
 */
do_action('ol.apollon.element_after', $_element);

// Freedom
unset($_element);
