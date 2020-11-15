<?php

/**
 * Post template social
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_post['extra']['link'] = get_post_meta($_post['id'], 'social-link', true);
$_post['extra']['content'] = getEmbedContent($_post['extra']['link']);

// Facebook
if ('facebook' === $_post['social']) {
    // Remove extra script and add some tags
    $_post['extra']['content'] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $_post['extra']['content']);
    $_post['extra']['content'] = str_replace('<div class="fb-video"', '<div class="fb-video" data-show-text="true" data-show-captions="true"', $_post['extra']['content']);
}

// Display
echo $_post['extra']['content'];
