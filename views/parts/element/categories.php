<?php

/**
 * Apollon categories elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo empty($_element['data']['categories']) ? '' : sprintf(
    '<p class="%s">%s</p>',
    'uk-text-primary uk-text-small uk-margin-remove-top uk-margin-small-bottom',
    $_element['data']['categories']
);
