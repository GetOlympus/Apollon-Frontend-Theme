<?php

/**
 * Adblocker part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_adblocker)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main adblocker feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.adblocker_start', false)) {
    return;
}

$_adblocker = array_merge([
    'connection' => 0,
    'content'    => [],
    'register'   => 0,
    'template'   => 'default',
], $_adblocker);
/*
    'content'    => get_option('adblock_content', []),
    'register'   => get_option('adblock_register', 0),
    'connection' => get_option('adblock_connection', 0),
*/


/**
 * Override available adblocker templates.
 *
 * @return array
 */
$_adblocker['available'] = apply_filters('ol.apollon.adblocker_available_files', [
    'default'
]);

if (empty($_adblocker['template']) || !in_array($_adblocker['template'], $_adblocker['available'])) {
    return;
}

$_adblocker['filename'] = $_adblocker['template'].'.php';


/**
 * Override adblocker vars.
 *
 * @return array
 */
$_adblocker = apply_filters('ol.apollon.adblocker_vars', $_adblocker);


/**
 * Fires before displaying adblocker part.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_before', $_adblocker);

// Include template
include __DIR__.S.$_adblocker['filename'];


/**
 * Fires after displaying adblocker part.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_after', $_adblocker);
