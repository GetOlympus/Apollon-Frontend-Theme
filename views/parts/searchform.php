<?php

/**
 * Searchform
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_searchform = isset($args) ? $args : [];


/**
 * Fires before displaying searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_before', $_searchform);

// Include template
include __DIR__.S.'searchform'.S.'_searchform.php';


/**
 * Fires after displaying searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_after', $_searchform);

// Freedom
unset($_searchform);
