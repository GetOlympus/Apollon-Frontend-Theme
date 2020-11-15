<?php

/**
 * Pagination
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_pagination = isset($_inc, $_inc['vars']) ? $_inc['vars'] : [];


/**
 * Fires before displaying pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_before', $_pagination);

// Include template
include __DIR__.S.'pagination'.S.'_pagination.php';


/**
 * Fires after displaying pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_after', $_pagination);

// Freedom
unset($_pagination);
