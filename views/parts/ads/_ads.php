<?php

/**
 * Ads part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_ads)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main ads feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.ads_start', false)) {
    return;
}

// Content starts
$_ads = array_merge([
    'mode'     => 'muted',
    'template' => 'global-header',
    'title'    => false,
], $_ads);


/**
 * Override available ads templates.
 *
 * @return array
 */
$_ads['available'] = apply_filters('ol.apollon.ads_available_files', [
    'global-footer', 'global-header', 'global-pre-header'
]);

if (empty($_ads['template']) || !in_array($_ads['template'], $_ads['available'])) {
    return;
}

$_ads['filename'] = 'default.php';


/**
 * Override ad option's value.
 *
 * @return string
 */
$_ads['code'] = apply_filters('ol.apollon.ads_'.$_ads['template'].'_option', '');

if (empty($_ads['code'])) {
    return;
}

$_ads['code'] = stripslashes($_ads['code']);


/**
 * Override ads vars.
 *
 * @return array
 */
$_ads = apply_filters('ol.apollon.ads_vars', $_ads);


/**
 * Fires before displaying ads part.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_part_before', $_ads);

// Include template
include __DIR__.S.$_ads['filename'];


/**
 * Fires after displaying ads part.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_part_after', $_ads);
