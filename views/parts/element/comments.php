<?php

/**
 * Apollon comments elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '%s %d',
    '<i uk-icon="comments"></i>',
    $_element['data']['comments']['count']
);
