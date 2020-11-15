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

$archive = [
    'template' => 'search',
    'title'    => sprintf(__('"%s" search results', OL_APOLLON_DICTIONARY), get_search_query()),
];

/**
 * Fires before displaying archive search.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_search_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive search.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_search_after', $archive);

// Freedom
unset($archive);
