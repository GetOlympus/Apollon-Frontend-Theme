<?php

/**
 * Pagination part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main pagination feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.pagination_start', false)) {
    return;
}

// Content starts
$_pagination = array_merge([
    'css'     => '',
    'options' => [],
], $_pagination);

// Check template availability
$_pagination['template'] = apollonGetOption('pagination_template');
$_pagination['filename'] = $_pagination['template'].'.php';


/**
 * Override default pagination options.
 *
 * @return array
 */
$_pagination['options'] = apply_filters('ol.apollon.pagination_options', array_merge([
    'first'         => false,
    'previous'      => true,
    'next'          => true,
    'last'          => false,
    'icons'         => true,
    'range'         => 4,
    'separator'     => '...',
    'template'      => 'default',
    'position'      => 'center',
    'title'         => __('apollon.ct.features.pagination.layout.title.placeholder', OL_APOLLON_DICTIONARY),
    'infinitelabel' => false,
    'nums'          => true,
], $_pagination['options']));


/**
 * Override pagination vars.
 *
 * @return array
 */
$_pagination = apply_filters('ol.apollon.pagination_vars', $_pagination);


/**
 * Fires before displaying pagination part.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_before', $_pagination);

// Include template
include __DIR__.S.$_pagination['filename'];


/**
 * Fires after displaying pagination part.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_after', $_pagination);
