<?php

/**
 * Single _custom-single: special case for all custom post types
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_single = [
    'template' => 'custom',
];


/**
 * Fires before displaying single _custom-single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_custom_before', $_single);

// Include template
include __DIR__.S.'single'.S.'_single.php';


/**
 * Fires after displaying single _custom-single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_custom_after', $_single);

// Freedom
unset($_single);
