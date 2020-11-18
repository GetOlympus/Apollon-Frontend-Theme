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

apollonGetPart('404-part.php', []);

get_footer();
