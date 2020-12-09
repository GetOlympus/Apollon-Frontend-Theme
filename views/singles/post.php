<?php

/**
 * Single post
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_single = [
    'posttype' => 'post',
];

// Include template
include __DIR__.S.'default.php';
