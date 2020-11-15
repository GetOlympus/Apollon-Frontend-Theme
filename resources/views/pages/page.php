<?php

/**
 * Page template
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_page = [
    'template' => 'default',
];


/**
 * Fires before displaying page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_before', $_page);

// Include template
include __DIR__.S.'page'.S.'_page.php';


/**
 * Fires after displaying page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_after', $_page);

// Freedom
unset($_page);
