<?php

/**
 * Widget part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_widget)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_widget = array_merge([
    'css'      => 'uk-section uk-padding-remove uk-margin-medium-bottom',
    'template' => 'default',
], $_widget);


/**
 * Override available widget templates.
 *
 * @return array
 */
$_widget['available'] = apply_filters('ol.apollon.widget_available_files', [
    'default'
]);

// Check template availability
if (empty($_widget['template']) || !in_array($_widget['template'], $_widget['available'])) {
    return;
}

$_widget['filename'] = '_default.php';


/**
 * Override widget vars.
 *
 * @return array
 */
$_widget = apply_filters('ol.apollon.widget_vars', $_widget);


/**
 * Fires before displaying widget part.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_before', $_widget);

// Include template
include __DIR__.S.$_widget['filename'];


/**
 * Fires after displaying widget part.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_after', $_widget);
