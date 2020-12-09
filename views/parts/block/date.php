<?php

/**
 * Apollon date block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '%s <time datetime="%s">%s</time>',
    sprintf(
        '<i uk-icon="clock" aria-hidden="%s"></i>',
        $_block['labels']['on']
    ),
    $_block['data']['dates']['c'],
    $_block['data']['dates']['long']
);
