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


/**
 * Override comments default contents.
 *
 * @param  array   $contents
 *
 * @return array
 */
$_comments = array_merge(apply_filters('ol.apollon.comments_default_contents', []), $_comments);


/**
 * Override available comments templates.
 *
 * @return array
 */
$_comments['available'] = apply_filters('ol.apollon.comments_available_files', [
    'default', 'facebook'
]);

// Check template availability
if (empty($_comments['template']) || !in_array($_comments['template'], $_comments['available'])) {
    return;
}

$_comments['filename'] = '_wrapper.php';


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
include __DIR__.S.$_comments['filename'];


/**
 * Fires after displaying comments part.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_part_after', $_comments);
