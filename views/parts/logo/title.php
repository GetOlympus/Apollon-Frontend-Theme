<?php

/**
 * Logo title part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_logo)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying `title` logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_title_before', $_logo);

echo sprintf(
    '<a href="%s" title="%s" class="%s">%s</a>',
    $_logo['image']['url'],
    $_logo['image']['esc_title'],
    $_logo['css'],
    $_logo['image']['title']
);


/**
 * Fires after displaying `title` logo.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_title_after', $_logo);
