<?php

/**
 * Searchform part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_searchform)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main searchform feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.searchform_start', false)) {
    return;
}

// Content starts
$_searchform = array_merge([
    'args'     => [],
    'template' => 'default',
], $_searchform);


/**
 * Override available searchform templates.
 *
 * @return array
 */
$_searchform['available'] = apply_filters('ol.apollon.searchform_available_files', [
    'default', 'drop', 'dropdown', 'full', 'modal', 'overlay', 'overlay-content'
]);

// Check template availability
if (empty($_searchform['template']) || !in_array($_searchform['template'], $_searchform['available'])) {
    return;
}

$_searchform['filename'] = $_searchform['template'].'.php';


/**
 * Override default searchform args.
 *
 * @return array
 */
$_searchform['args'] = array_merge(apply_filters('ol.apollon.searchform_default_args', [
    'action'      => OL_BLOG_HOME_URL_ESCAPED,
    'navbarcss'   => '',
    'formcss'     => '',
    'inputcss'    => '',
    'placeholder' => __('Search...', OL_APOLLON_DICTIONARY),
]), $_searchform['args']);


/**
 * Override searchform vars.
 *
 * @return array
 */
$_searchform = apply_filters('ol.apollon.searchform_vars', $_searchform);


/**
 * Fires before displaying searchform part.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_before', $_searchform);

// Include template
include __DIR__.S.$_searchform['filename'];


/**
 * Fires after displaying searchform part.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_after', $_searchform);
