<?php

/**
 * Loop tag
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'meta'     => __('Tag', OL_APOLLON_DICTIONARY),
    'sidebar'  => 'archives',
    //'subtitle' => tag_description(),
    'title'    => single_tag_title('', false),
];

// Include template
include __DIR__.S.'default.php';
