<?php

/**
 * Archive video
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$archive = [
    'template' => 'video',
    'title'    => __('Videos', OL_APOLLON_DICTIONARY),
];

/**
 * Fires before displaying archive video.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_video_before', $archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';

/**
 * Fires after displaying archive video.
 *
 * @param  array   $archive
 */
do_action('ol.apollon.archive_video_after', $archive);

// Freedom
unset($archive);
