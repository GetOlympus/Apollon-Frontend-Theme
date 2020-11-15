<?php

/**
 * Sidebar part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_sidebar)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main sidebar feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.sidebar_start', false)) {
    return;
}

// Content starts
$_sidebar = array_merge([
    'background' => 'transparent',
    'css'        => '',
    'paddingh'   => 'none',
    'paddingv'   => 'none',
    'size'       => '',
    'sticky'     => false,
    'template'   => 'main_1',
], $_sidebar);


/**
 * Override available sidebar templates.
 *
 * @return array
 */
$_sidebar['available'] = apply_filters('ol.apollon.sidebar_available_files', [
    'top_1', 'top_2', 'top_3', 'top_4', 'main_1', 'main_2', 'main_3', 'main_4', 'sub_1', 'sub_2', 'sub_3', 'sub_4'
]);

// Check template availability
if (empty($_sidebar['template']) || !in_array($_sidebar['template'], $_sidebar['available'])) {
    return;
}

$_sidebar['filename'] = '_default.php';


/**
 * Check whether sidebar is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
$_sidebar['is_enabled'] = apply_filters('ol.apollon.sidebar_check', is_active_sidebar($_sidebar['template']));

// Check sidebar
if (!$_sidebar['is_enabled']) {
    return;
}


/**
 * Override sidebar vars.
 *
 * @return array
 */
$_sidebar = apply_filters('ol.apollon.sidebar_vars', $_sidebar);


/**
 * Fires before displaying sidebar part.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_before', $_sidebar);

// Include template
include __DIR__.S.$_sidebar['filename'];


/**
 * Fires after displaying sidebar part.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_after', $_sidebar);
