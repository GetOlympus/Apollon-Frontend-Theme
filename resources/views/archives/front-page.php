<?php

/**
 * Archive front-page
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_archive = [
    'sidebar'  => 'page',
    'subtitle' => '',
    'template' => 'front-page',
    'title'    => '',
];


/**
 * Fires before displaying archive front-page.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_front-page_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive front-page.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_front-page_after', $_archive);

// Freedom
unset($_archive);
