<?php

/**
 * Archive _404 part: special case for loop without posts
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_archive)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_archive_item = $_archive;


/**
 * Fires before displaying 404 archive.
 *
 * @param  array   $_archive_item
 */
do_action('ol.apollon.archive_404_before', $_archive_item);

apollonGetPart('404-part.php', []);


/**
 * Fires after displaying after archive.
 *
 * @param  array   $_archive_item
 */
do_action('ol.apollon.archive_404_after', $_archive_item);

// Freedom
unset($_archive_item);
