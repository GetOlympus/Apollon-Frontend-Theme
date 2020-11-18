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

$_archive = [
    'sidebar'  => 'archive',
    'subtitle' => tag_description(),
    'suptitle' => __('Tag', OL_APOLLON_DICTIONARY),
    'template' => 'tag',
    'title'    => single_tag_title('', false),
];


/**
 * Fires before displaying archive tag.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_tag_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive tag.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_tag_after', $_archive);

// Freedom
unset($_archive);
