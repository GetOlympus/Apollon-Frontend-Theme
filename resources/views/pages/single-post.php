<?php

/**
 * Single post template
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_single = [
    'template' => 'post',
];


/**
 * Fires before displaying single post.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_before', $_single);

// Include template
include __DIR__.S.'single'.S.'_single.php';


/**
 * Fires after displaying single post.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_after', $_single);

// Freedom
unset($_single);
