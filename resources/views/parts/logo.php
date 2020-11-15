<?php

/**
 * Logo
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_logo = isset($_inc, $_inc['vars']) ? $_inc['vars'] : [];


/**
 * Fires before displaying logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_before', $_logo);

// Include template
include __DIR__.S.'logo'.S.'_logo.php';


/**
 * Fires after displaying logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_after', $_logo);

// Freedom
unset($_logo);
