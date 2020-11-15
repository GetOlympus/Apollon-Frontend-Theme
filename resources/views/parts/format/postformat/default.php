<?php

/**
 * Format post subpart.
 * 
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format_item)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build categories.
 * @see hook ol.apollon.build_categories
 */
$_format_item['categories'] = apply_filters('ol.apollon.build_categories', $_format_item['categories'], false);

// Include template
include __DIR__.S.'default'.S.$_format_item['display'].'.php';
