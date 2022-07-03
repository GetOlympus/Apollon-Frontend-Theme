<?php

/**
 * Footer
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_footer = isset($args) ? $args : [];


/**
 * Fires before displaying footer.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.footer_before', $_footer);

// Include template
include __DIR__.S.'footer'.S.'_footer.php';


/**
 * Fires after displaying footer.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.footer_after', $_footer);

// Freedom
unset($_footer);
