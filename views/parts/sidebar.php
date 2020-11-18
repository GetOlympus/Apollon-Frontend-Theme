<?php

/**
 * Sidebar
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_sidebar = isset($_inc, $_inc['vars']) ? $_inc['vars'] : [];


/**
 * Fires before displaying sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_before', $_sidebar);

// Include template
include __DIR__.S.'sidebar'.S.'_sidebar.php';


/**
 * Fires after displaying sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_after', $_sidebar);

// Freedom
unset($_sidebar);
