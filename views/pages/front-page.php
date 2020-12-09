<?php

/**
 * Front page template
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}


/**
 * Override front page vars.
 *
 * @return array
 */
$_page = apply_filters('ol.apollon.page_front_vars', []);


/**
 * Fires before displaying front page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_front_before', $_page);

get_header();

the_content();

get_footer();


/**
 * Fires after displaying front page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_front_after', $_page);

// Freedom
unset($_page);
