<?php

/**
 * Post template dailymotion
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_post['social'] = 'dailymotion';

// Template
include OL_APOLLON_VIEWSPATH.'singles'.S.'social'.S.'social.php';
