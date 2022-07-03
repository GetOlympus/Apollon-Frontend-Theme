<?php

/**
 * Comments part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_comments)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main comments feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.comments_start', false) || post_password_required()) {
    return;
}

// Include functions
include __DIR__.S.'_function.php';


// Content starts
$_comments = array_merge([
    'available' => [],
    'data'      => [],
    'labels'    => [],
    'options'   => [],
], $_comments);


/**
 * Override default comments labels.
 *
 * @return array
 */
$_comments['labels'] = apply_filters('ol.apollon.comments_labels', []);


/**
 * Override default comments options.
 *
 * @return array
 */
$_comments['options'] = apply_filters('ol.apollon.comments_options', array_merge([
    'avatar'        => true,
    'website'       => true,
    'htmltags'      => false,
    'header'        => true,
    'list-layout'   => 'default',
    'form-layout'   => 'default',
    'form-stacked'  => false,
    'labels'        => true,
    'highlight'     => false,
    'form-position' => 'bottom',
    'navs-position' => 'bottom',
], $_comments['options']));


/**
 * Override available comments templates.
 *
 * @return array
 */
$_comments['available'] = apply_filters('ol.apollon.comments_available_files', [
    'default', 'facebook'
]);

// Override available form layout.
if (!in_array($_comments['options']['form-layout'], $_comments['available'])) {
    $_comments['options']['form-layout'] = $_comments['available'][0];
}

// Override available list layout.
if (!in_array($_comments['options']['list-layout'], $_comments['available'])) {
    $_comments['options']['list-layout'] = $_comments['available'][0];
}


/**
 * Override comments vars.
 *
 * @return array
 */
$_comments = apply_filters('ol.apollon.comments_vars', $_comments);


/**
 * Fires before displaying comments part.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_part_before', $_comments);

// Include template
include __DIR__.S.'wrapper.php';


/**
 * Fires after displaying comments part.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_part_after', $_comments);
