<?php

/**
 * Standard post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Details
$_post = include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'_format.php';

// Extras
$_post['extra']['tpl'] = 'default';
$_post['extra']['cats'] = get_the_category($_post['id']);
$_post['extra']['fb_text'] = sprintf(__('Partager &quot;%s&quot; sur Facebook', OL_APOLLON_DICTIONARY), $_post['esc_title']);
$_post['extra']['tw_text'] = sprintf(__('Partager &quot;%s&quot; sur Twitter', OL_APOLLON_DICTIONARY), $_post['esc_title']);

// Template
if (!empty($_post['extra']['cats']) && 'wire' === $_post['extra']['cats'][0]->category_nicename) {
    $_post['extra']['tpl'] = 'wire';
}

// Include template
include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'standard'.S.$_post['extra']['tpl'].'.php';

unset($_post);
