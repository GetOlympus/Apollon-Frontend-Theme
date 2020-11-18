<?php

/**
 * Archive search
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_archive = [
    'sidebar'  => 'search',
    'subtitle' => '',
    'suptitle' => __('Search results for', OL_APOLLON_DICTIONARY),
    'template' => 'search',
    'title'    => get_search_query(),
];


/**
 * Fires before displaying archive search.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_search_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive search.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_search_after', $_archive);

// Freedom
unset($_archive);
