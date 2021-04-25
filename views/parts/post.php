<?php

/**
 * Post
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_post = isset($args) ? $args : [];


/**
 * Fires before displaying post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_before', $_post);

// Include template
include __DIR__.S.'post'.S.'_post.php';


/**
 * Fires after displaying post.
 *
 * @param  array   $_post
 */
do_action('ol.apollon.post_after', $_post);

// Freedom
unset($_post);
