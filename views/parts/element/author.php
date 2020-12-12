<?php

/**
 * Apollon author elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo empty($_element['data']['author']) ? '' : sprintf(
    '%s %s',
    sprintf(
        '<i uk-icon="user" aria-hidden="%s"></i>',
        $_element['labels']['by']
    ),
    $_element['data']['author']['name']
);
