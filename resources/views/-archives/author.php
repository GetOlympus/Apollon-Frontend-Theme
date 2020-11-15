<?php

/**
 * Archive author
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$archive = [
    'template' => 'author',
    'title'    => sprintf(__('%s blog posts', OL_APOLLON_DICTIONARY), get_the_author()),
];

$archive['author'] = get_the_author_meta('ID');

/**
 * Fires before displaying archive author.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_author_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive author.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_author_after', $archive);

// Freedom
unset($archive);
