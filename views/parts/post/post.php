<?php

/**
 * Post default part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_post)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_default_before', $_post);

// Get post format
apollonGetPart('format.php', [
    'contents' => $_post['contents'],
    'data'     => $_post['data'],
    'template' => $_post['template'],
]);


/**
 * Fires after displaying default post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_default_after', $_post);
