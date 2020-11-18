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

$_archive = [
    'sidebar'  => 'archive',
    'subtitle' => '',
    'suptitle' => '',
    'template' => 'date',
    'title'    => '',
];

// Set page title
if (is_day()) {
    $_archive['suptitle'] = __('Daily Archives', OL_APOLLON_DICTIONARY);
    $_archive['title']    = get_the_date();
} else if (is_month()) {
    $_archive['suptitle'] = __('Monthly Archives', OL_APOLLON_DICTIONARY);
    $_archive['title']    = get_the_date('F Y');
} else if (is_year()) {
    $_archive['suptitle'] = __('Yearly Archives', OL_APOLLON_DICTIONARY);
    $_archive['title']    = get_the_date('Y');
}


/**
 * Fires before displaying archive date.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_date_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive date.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_date_after', $_archive);

// Freedom
unset($_archive);
