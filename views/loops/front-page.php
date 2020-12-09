<?php

/**
 * Loop front-page
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'sidebar' => 'default',
];

//apollonGetOption('layout_hp_posttypes'),

// Include template
include __DIR__.S.'default.php';

// Freedom
unset($_loop);
