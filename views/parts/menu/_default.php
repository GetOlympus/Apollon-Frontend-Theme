<?php

/**
 * Menu _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_menu)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
if (!isset($_menu['args']['menu']) || empty($_menu['args']['menu'])) {
    $_menu['args']['theme_location'] = $_menu['template'];
}


/**
 * Fires before displaying `_default` menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_'.$_menu['template'].'_before', $_menu);

wp_nav_menu($_menu['args']);


/**
 * Fires after displaying `_default` menu.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_'.$_menu['template'].'_after', $_menu);
