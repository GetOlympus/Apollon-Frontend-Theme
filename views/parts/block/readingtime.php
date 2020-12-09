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

echo empty($_block['data']['readingtime']) ? '' : sprintf(
    '%s',
    $_block['data']['readingtime']
);
