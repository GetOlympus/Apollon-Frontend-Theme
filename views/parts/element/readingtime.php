<?php

/**
 * Apollon reading time elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

if (!empty($_element['data']['readingtime'])) {
    echo sprintf(
        '%s',
        $_element['data']['readingtime']
    );
}
