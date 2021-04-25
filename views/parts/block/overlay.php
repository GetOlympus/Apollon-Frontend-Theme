<?php

/**
 * Apollon overlay block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<aside class="%s"></aside>',
    'uk-overlay-default uk-position-cover'
);
