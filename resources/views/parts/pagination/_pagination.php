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

// Include functions
include __DIR__.S.'_function.php';

// Content starts
$_pagination = array_merge([
    'template' => 'center',
], $_pagination);


/**
 * Override available pagination templates.
 *
 * @return array
 */
$_pagination['available'] = apply_filters('ol.apollon.pagination_available_files', [
    'center', 'left', 'right'
]);

// Check template availability
if (empty($_pagination['template']) || !in_array($_pagination['template'], $_pagination['available'])) {
    return;
}

$_pagination['filename'] = '_default.php';


/**
 * Build pagination items.
 *
 * @return array
 */
$_pagination['items'] = apply_filters('ol.apollon.pagination_build_items', []);

if (empty($_pagination['items'])) {
    return;
}


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
