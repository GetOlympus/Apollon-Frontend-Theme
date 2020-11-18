<?php

/**
 * 404 part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_404)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_404 = array_merge([
    'template'  => 'default',
], $_404);


/**
 * Override available 404 templates.
 *
 * @return array
 */
$_404['available'] = apply_filters('ol.apollon.404_available_files', [
    'default'
]);

// Check template availability
if (empty($_404['template']) || !in_array($_404['template'], $_404['available'])) {
    $_404['template'] = $_404['available'][0];
}

$_404['filename'] = $_404['template'].'.php';


/**
 * Override 404 vars.
 *
 * @return array
 */
$_404 = apply_filters('ol.apollon.404_vars', $_404);


/**
 * Fires before displaying 404 part.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_part_before', $_404);

// Include template
include __DIR__.S.$_404['filename'];


/**
 * Fires after displaying 404 part.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_part_after', $_404);
