<?php

/**
 * 404
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_404 = isset($_inc, $_inc['vars']) ? $_inc['vars'] : [];


/**
 * Fires before displaying 404.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_before', $_404);

// Include template
include __DIR__.S.'404'.S.'_404.php';


/**
 * Fires after displaying 404.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_after', $_404);

// Freedom
unset($_404);
