<?php

/**
 * Loop archive
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'sidebar' => 'archives',
];

// Include template
include __DIR__.S.'default.php';

// Freedom
unset($_loop);
