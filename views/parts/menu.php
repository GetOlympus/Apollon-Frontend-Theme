<?php

/**
 * Menu
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_menu = isset($args) ? $args : [];


/**
 * Fires before displaying menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_before', $_menu);

// Include template
include __DIR__.S.'menu'.S.'_menu.php';


/**
 * Fires after displaying menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_after', $_menu);

// Freedom
unset($_menu);
