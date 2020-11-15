<?php

/**
 * Archive tag
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$archive = [
    'template' => 'tag',
    'title'    => single_tag_title('', false),
];

/**
 * Fires before displaying archive tag.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_tag_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive tag.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_tag_after', $archive);

// Freedom
unset($archive);
