<?php

/**
 * Comments
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_comments = isset($args) ? $args : [];


/**
 * Fires before displaying comments.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_before', $_comments);

// Include template
include __DIR__.S.'comments'.S.'_comments.php';


/**
 * Fires after displaying comments.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_after', $_comments);

// Freedom
unset($_comments);
