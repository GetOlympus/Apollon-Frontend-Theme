<?php

/**
 * 404 template.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

get_header();

$_inc = [
    'filename' => '404-part.php',
    'part'     => true,
];

include OL_APOLLON_VIEWSPATH.'_inc.php';

get_footer();
