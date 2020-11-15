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

$cover = 'rvs-default';

// Details
$_post = include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'_format.php';

// Custom
$_post['extra']['details'] = get_post_meta($_post['id'], 'game-details', true);
$_post['extra']['tpl'] = 'editorial';

// Template
if (empty($_post['src'])) {
    $_post['extra']['tpl'] = 'match';
}

// Include template
include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'game'.S.$_post['extra']['tpl'].'.php';

unset($cover);
unset($_post);
