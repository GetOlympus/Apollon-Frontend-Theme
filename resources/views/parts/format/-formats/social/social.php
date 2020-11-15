<?php

/**
 * Default social post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Get link details
$_post['extra']['link'] = get_post_meta($_post['id'], 'social-link', true);
$_post['extra']['tpl'] = 'quote';

// Template
if (false !== strpos($_post['extra']['link'], 'dailymotion')) {
    $_post['extra']['tpl'] = 'dailymotion';
} else if (false !== strpos($_post['extra']['link'], 'dai.ly')) {
    $_post['extra']['tpl'] = 'dailymotion';
} else if (false !== strpos($_post['extra']['link'], 'facebook')) {
    $_post['extra']['tpl'] = 'facebook';
} else if (false !== strpos($_post['extra']['link'], 'insta')) {
    $_post['extra']['tpl'] = 'instagram';
} else if (false !== strpos($_post['extra']['link'], 'soundcloud')) {
    $_post['extra']['tpl'] = 'soundcloud';
} else if (false !== strpos($_post['extra']['link'], 'twitter')) {
    $_post['extra']['tpl'] = 'twitter';
} else if (false !== strpos($_post['extra']['link'], 'vine')) {
    $_post['extra']['tpl'] = 'vine';
} else if (false !== strpos($_post['extra']['link'], 'youtu')) {
    $_post['extra']['tpl'] = 'youtube';
}

// Inclue template
include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'social'.S.$_post['extra']['tpl'].'.php';
