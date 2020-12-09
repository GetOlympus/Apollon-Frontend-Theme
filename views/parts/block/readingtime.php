<?php

/**
 * Apollon reading time block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

if (!empty($_block['data']['readingtime'])) {
    echo sprintf(
        '%s',
        $_block['data']['readingtime']
    );
}
