<?php

/**
 * Apollon author block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '%s %s',
    sprintf(
        '<i uk-icon="user" aria-hidden="%s"></i>',
        $_block['labels']['by']
    ),
    $_block['data']['author']['name']
);
