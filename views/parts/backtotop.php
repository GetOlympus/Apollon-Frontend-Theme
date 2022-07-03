<?php

/**
 * Back to top button
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_backtotop = isset($args) ? $args : [];


/**
 * Fires before displaying back to top button.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_before', $_backtotop);

// Include template
include __DIR__.S.'backtotop'.S.'_backtotop.php';


/**
 * Fires after displaying back to top button.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_after', $_backtotop);

// Freedom
unset($_backtotop);
