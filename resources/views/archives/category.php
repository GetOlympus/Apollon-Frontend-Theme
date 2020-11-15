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

$_archive = [
    'sidebar'  => 'archive',
    'subtitle' => category_description(),
    'suptitle' => __('Category', OL_APOLLON_DICTIONARY),
    'template' => 'category',
    'title'    => single_cat_title('', false),
];


/**
 * Fires before displaying archive category.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_category_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive category.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_category_after', $_archive);

// Freedom
unset($_archive);
