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

$_archive = [
    'sidebar'  => 'archive',
    'subtitle' => get_the_author_meta('user_description'),
    'suptitle' => __('Author', OL_APOLLON_DICTIONARY),
    'template' => 'author',
    'title'    => get_the_author(),
];


/**
 * Fires before displaying archive author.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_author_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive author.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_author_after', $_archive);

// Freedom
unset($_archive);
