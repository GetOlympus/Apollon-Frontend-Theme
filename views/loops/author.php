<?php

/**
 * Loop author
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'meta'     => __('Author', OL_APOLLON_DICTIONARY),
    'sidebar'  => 'archives',
    //'subtitle' => get_the_author_meta('user_description'),
    'title'    => get_the_author(),
];

// Include template
include __DIR__.S.'default.php';
