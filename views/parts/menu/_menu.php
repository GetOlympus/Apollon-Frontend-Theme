<?php

/**
 * Menu part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_menu)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_menu = array_merge([
    'options' => [],
    'menu' => 'main_1',
], $_menu);


/**
 * Check whether menu is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.menu_check', has_nav_menu($_menu['menu']))) {
    return;
}

$_menu['filename'] = 'default.php';


/**
 * Override menu options.
 *
 * @return array
 */
$_menu['options'] = apply_filters('ol.apollon.menu_options', array_merge([
    'container'  => false,
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'menu_class' => 'uk-navbar-nav',
    'walker'     => new ApollonFrontendTheme\MenuWalker(),
], $_menu['options']));


/**
 * Override menu vars.
 *
 * @return array
 */
$_menu = apply_filters('ol.apollon.menu_vars', $_menu);


/**
 * Fires before displaying menu part.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_before', $_menu);

// Include template
include __DIR__.S.$_menu['filename'];


/**
 * Fires after displaying menu part.
 *
 * @param  array   $_menu
 */
do_action('ol.apollon.menu_part_after', $_menu);
