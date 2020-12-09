<?php

/**
 * Adblocker
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_adblocker = isset($args) ? $args : [];


/**
 * Fires before displaying adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_before', $_adblocker);

// Include template
include __DIR__.S.'adblocker'.S.'_adblocker.php';


/**
 * Fires after displaying adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_after', $_adblocker);

// Freedom
unset($_adblocker);
