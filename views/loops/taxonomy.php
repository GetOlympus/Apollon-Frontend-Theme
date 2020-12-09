<?php

/**
 * Loop taxonomy
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'meta'    => __('Taxonomy', OL_APOLLON_DICTIONARY),
    'sidebar' => 'archives',
    'title'   => single_term_title('', false),
];

// Include template
include __DIR__.S.'default.php';
