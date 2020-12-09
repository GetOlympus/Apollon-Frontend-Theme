<?php

/**
 * Loop search
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'meta'    => __('Search results for', OL_APOLLON_DICTIONARY),
    'sidebar' => 'search',
    'title'   => get_search_query(),
];

// Include template
include __DIR__.S.'default.php';
