<?php

/**
 * Apollon excerpt elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<div class="%s">%s</div>',
    'uk-panel uk-margin-remove-top uk-margin-small-bottom',
    $_element['data']['excerpt']
);
