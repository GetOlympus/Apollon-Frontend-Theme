<?php

/**
 * Loop date
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_loop = [
    'meta'    => '',
    'sidebar' => 'archives',
    'title'   => '',
];

// Set loop meta and title
if (is_day()) {
    $_loop['meta']  = __('Daily Archives', OL_APOLLON_DICTIONARY);
    $_loop['title'] = get_the_date();
} else if (is_month()) {
    $_loop['meta']  = __('Monthly Archives', OL_APOLLON_DICTIONARY);
    $_loop['title'] = get_the_date('F Y');
} else if (is_year()) {
    $_loop['meta']  = __('Yearly Archives', OL_APOLLON_DICTIONARY);
    $_loop['title'] = get_the_date('Y');
}

// Include template
include __DIR__.S.'default.php';

// Freedom
unset($_loop);
