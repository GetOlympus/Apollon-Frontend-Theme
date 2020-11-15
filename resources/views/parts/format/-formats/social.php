<?php

/**
 * Social post format.
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

// Type
$_post['extra']['type'] = get_post_meta($_post['id'], 'social-type', true);
$_post['extra']['type'] = in_array($_post['extra']['type'], ['social', 'quote', 'other']) ? $_post['extra']['type'] : 'quote';

// Include template
include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'social'.S.$_post['extra']['type'].'.php';

unset($_post);
