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
    'mobile'     => true,
    'override'   => false,
    'sidebar'    => 'archive_1',
    'size'       => '',
    'sticky'     => false,
    'template'   => 'default',
], $_sidebar);


/**
 * Override available sidebar templates.
 *
 * @return array
 */
$_sidebar['available'] = apply_filters('ol.apollon.sidebar_available_files', [
    'default', 'footer'
]);

// Check template availability
if (empty($_sidebar['template']) || !in_array($_sidebar['template'], $_sidebar['available'])) {
    $_sidebar['template'] = $_sidebar['available'][0];
}


/**
 * Check whether sidebar is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.sidebar_check', is_active_sidebar($_sidebar['sidebar']))) {
    return;
}

$_sidebar['filename'] = $_sidebar['template'].'.php';


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
