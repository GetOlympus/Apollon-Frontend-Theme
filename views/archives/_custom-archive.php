<?php

/**
 * Archive _custom-archive: special case for all custom post types
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_archive = [
    'template' => 'front-page',
    'title'    => get_the_archive_title(),
];


/**
 * Fires before displaying archive _custom-archive.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_custom_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive _custom-archive.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_custom_after', $_archive);

// Freedom
unset($_archive);
