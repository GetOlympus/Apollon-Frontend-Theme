<?php

/**
 * Single post subpart.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_single_item)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build categories.
 * @see hook ol.apollon.build_categories
 */
$_single_item['categories'] = apply_filters('ol.apollon.build_categories', $_single_item['categories']);

// Include template
include __DIR__.S.'default'.S.$_single_item['display'].'.php';
