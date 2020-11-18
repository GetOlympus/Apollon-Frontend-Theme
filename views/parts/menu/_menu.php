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
    'args'      => [],
    'template'  => 'main_1',
], $_menu);


/**
 * Override available menu templates.
 *
 * @return array
 */
$_menu['available'] = apply_filters('ol.apollon.menu_available_files', [
    'top_1', 'top_2', 'top_3', 'main_1', 'main_2', 'main_3', 'sub_1', 'sub_2', 'sub_3'
]);

// Check template availability
if (empty($_menu['template']) || !in_array($_menu['template'], $_menu['available'])) {
    return;
}


/**
 * Check whether menu is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
$_menu['is_enabled'] = apply_filters('ol.apollon.menu_check', has_nav_menu($_menu['template']));

// Check menu
if (!$_menu['is_enabled']) {
    return;
}

$_menu['filename'] = '_default.php';


/**
 * Override menu args.
 *
 * @return array
 */
$_menu['args'] = apply_filters('ol.apollon.menu_args', array_merge([
    'container'  => false,
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'menu_class' => 'uk-navbar-nav',
    'walker'     => new ApollonFrontendTheme\MenuWalker(),
], $_menu['args']));


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
