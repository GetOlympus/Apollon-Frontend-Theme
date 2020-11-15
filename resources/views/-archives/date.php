<?php

/**
 * Archive date
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$archive = [
    'template' => 'date',
    'title'    => __('Blog archives', OL_APOLLON_DICTIONARY),
];

// Set page title
if (is_day()) {
    $archive['title'] = get_the_date();
} else if (is_month()) {
    $archive['title'] = get_the_date(_x('F Y', 'monthly archives date format', OL_APOLLON_DICTIONARY));
} else if (is_year()) {
    $archive['title'] = get_the_date(_x('Y', 'yearly archives date format', OL_APOLLON_DICTIONARY));
}

/**
 * Fires before displaying archive date.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_date_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive date.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_date_after', $archive);

// Freedom
unset($archive);
