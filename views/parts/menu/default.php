<?php

/**
 * Menu default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_menu)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
if (!isset($_menu['options']['menu']) || empty($_menu['options']['menu'])) {
    $_menu['options']['theme_location'] = $_menu['menu'];
}


/**
 * Fires before displaying default menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_default_before', $_menu);

wp_nav_menu($_menu['options']);


/**
 * Fires after displaying default menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_default_after', $_menu);
