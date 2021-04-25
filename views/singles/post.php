<?php

/**
 * Single post
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Single defaults
$_single = [
    'contents'  => [],
    'data'      => [],
    'labels'    => [],
    'options'   => [],
    'posttype'  => 'post',
    'thumbnail' => 'large',
];


/**
 * Override single options.
 *
 * @return array
 */
$_single['options'] = apply_filters('ol.apollon.single_options', $_single['posttype']);


/**
 * Override single default vars.
 *
 * @return array
 */
$_single = apply_filters('ol.apollon.single_vars', $_single);


/**
 * Fires before displaying post single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_before', $_single);

get_header();

echo '<!-- container -->'."\n";

echo sprintf(
    '<article class="uk-section uk-container uk-container-%s%s">',
    $_single['options']['container'],
    !$_single['options']['expand'] ? '' : ' uk-padding-remove-top'
);

apollonGetPart('block.php', [
    'data'    => $_single['data'],
    'feature' => !$_single['options']['feature'] ? [] : [
        'header' => $_single['options']['header'],
        'width'  => $_single['options']['content'],
    ],
    'metas'   => isset($_single['contents']['metas']) ? $_single['contents']['metas'] : [],
    'part'    => 'feature',
]);

echo sprintf(
    '<div class="uk-grid uk-flex-center uk-grid-%s" uk-grid>',
    $_single['options']['gap']
);

echo '<!-- content -->'."\n";

echo sprintf(
    '<main class="uk-width-1-1@s uk-width-%s@m uk-article">',
    $_single['options']['content']
);


/**
 * Fires before displaying post single blocks.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_blocks_before', $_single);

foreach ($_single['contents'] as $key => $value) {
    apollonGetPart('block.php', [
        'data'  => $_single['data'],
        'metas' => $value,
        'part'  => $key,
    ]);
}


/**
 * Fires after displaying post single blocks.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_blocks_after', $_single);

echo '</main>';


/**
 * Fires before displaying post single sidebar.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_sidebar_before', $_single);

// Display sidebars
if ('left' === $_single['options']['sidebar-position']) {
    echo '<!-- sidebar -->'."\n";

    if ($_single['options']['sidebar-1']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'-1',
        ]);
    }

    if ($_single['options']['sidebar-2']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'-2',
        ]);
    }
}

if ('center' === $_single['options']['sidebar-position'] && $_single['options']['sidebar-1']) {
    apollonGetPart('sidebar.php', [
        'css'      => 'uk-flex-first',
        'override' => $_single['options']['sidebars'],
        'sidebar'  => $_single['posttype'].'-1',
    ]);
}

if ('center' === $_single['options']['sidebar-position'] && $_single['options']['sidebar-2']) {
    apollonGetPart('sidebar.php', [
        'override' => $_single['options']['sidebars'],
        'sidebar'  => $_single['posttype'].'-2',
    ]);
}

if ('right' === $_single['options']['sidebar-position']) {
    echo '<!-- sidebar -->'."\n";

    if ($_single['options']['sidebar-1']) {
        apollonGetPart('sidebar.php', [
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'-1',
        ]);
    }

    if ($_single['options']['sidebar-2']) {
        apollonGetPart('sidebar.php', [
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'-2',
        ]);
    }
}


/**
 * Fires after displaying post single sidebar.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_sidebar_after', $_single);

echo '</div>';
echo '</article>';

get_footer();


/**
 * Fires after displaying post single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_post_after', $_single);

// Freedom
unset($_single);
