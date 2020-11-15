<?php

/**
 * Archive category
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$archive = [
    'template' => 'category',
    'title'    => single_cat_title('', false),
];

/**
 * Fires before displaying archive category.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_category_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive category.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_category_after', $archive);

// Freedom
unset($archive);
