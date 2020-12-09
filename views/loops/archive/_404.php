<?php

/**
 * Archive _404 part: special case for loop without posts
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_loop_item = $_loop;


/**
 * Fires before displaying 404 archive.
 *
 * @param  array   $_loop_item
 */
do_action('ol.apollon.archive_404_before', $_loop_item);

apollonGetPart('404-part.php', []);


/**
 * Fires after displaying after archive.
 *
 * @param  array   $_loop_item
 */
do_action('ol.apollon.archive_404_after', $_loop_item);

// Freedom
unset($_loop_item);
