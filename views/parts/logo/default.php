<?php

/**
 * Logo default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_logo)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying `default` logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_default_before', $_logo);

echo sprintf(
    '<a href="%s" title="%s" class="%s">%s%s</a>',
    $_logo['image']['url'],
    $_logo['image']['esc_title'],
    $_logo['css'],
    sprintf(
        '<img src="%s" alt="%s" width="%d" />',
        $_logo['image']['src'],
        $_logo['image']['name'],
        $_logo['image']['width']
    ),
    $_logo['image']['slogan']
);


/**
 * Fires after displaying `default` logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_default_after', $_logo);
