<?php

/**
 * Ads
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_ads = isset($args) ? $args : [];


/**
 * Fires before displaying ads.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_before', $_ads);

// Include template
include __DIR__.S.'ads'.S.'_ads.php';


/**
 * Fires after displaying ads.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_after', $_ads);

// Freedom
unset($_ads);
