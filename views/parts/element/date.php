<?php

/**
 * Apollon date elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '%s <time datetime="%s">%s</time>',
    sprintf(
        '<i uk-icon="clock" aria-hidden="%s"></i>',
        $_element['labels']['on']
    ),
    $_element['data']['dates']['c'],
    $_element['data']['dates']['long']
);
