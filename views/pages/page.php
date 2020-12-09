<?php

/**
 * Page template
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_page = [
    'contents' => [],
    'data'     => [],
    'options'  => [],
    'template' => 'default',
];


/**
 * Override page options.
 *
 * @return array
 */
$_page['options'] = apply_filters('ol.apollon.page_options', 'page');


/**
 * Override page default vars.
 *
 * @return array
 */
$_page = apply_filters('ol.apollon.page_vars', $_page);


/**
 * Fires before displaying page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_before', $_page);

get_header();

echo '<!-- container -->'."\n";

echo sprintf(
    '<article class="uk-section uk-container uk-container-%s">',
    $_page['options']['container']
);

echo sprintf(
    '<div class="uk-grid uk-flex-center uk-grid-%s" uk-grid>',
    $_page['options']['gridgap']
);

echo '<!-- content -->'."\n";

echo sprintf(
    '<main class="uk-width-1-1@s uk-width-%s@m uk-article">',
    $_page['options']['content']
);


/**
 * Fires before displaying page blocks.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_blocks_before', $_page);

foreach ($_page['contents'] as $key => $value) {
    apollonGetPart('block.php', [
        'data'  => $_page['data'],
        'metas' => $value,
        'part'  => $key,
    ]);
}


/**
 * Fires after displaying page blocks.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_blocks_after', $_page);

echo '</main>';


/**
 * Fires before displaying page sidebar.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_sidebar_before', $_page);

// Display sidebars
if ('left' === $_page['options']['sidebarpos']) {
    echo '<!-- sidebar -->'."\n";

    if ($_page['options']['sidebar1']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_page['options']['sidebars'],
            'sidebar'  => 'page_1',
        ]);
    }

    if ($_page['options']['sidebar2']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_page['options']['sidebars'],
            'sidebar'  => 'page_2',
        ]);
    }
}

if ('center' === $_page['options']['sidebarpos'] && $_page['options']['sidebar1']) {
    apollonGetPart('sidebar.php', [
        'css'      => 'uk-flex-first',
        'override' => $_page['options']['sidebars'],
        'sidebar'  => 'page_1',
    ]);
}

if ('center' === $_page['options']['sidebarpos'] && $_page['options']['sidebar2']) {
    apollonGetPart('sidebar.php', [
        'override' => $_page['options']['sidebars'],
        'sidebar'  => 'page_2',
    ]);
}

if ('right' === $_page['options']['sidebarpos']) {
    echo '<!-- sidebar -->'."\n";

    if ($_page['options']['sidebar1']) {
        apollonGetPart('sidebar.php', [
            'override' => $_page['options']['sidebars'],
            'sidebar'  => 'page_1',
        ]);
    }

    if ($_page['options']['sidebar2']) {
        apollonGetPart('sidebar.php', [
            'override' => $_page['options']['sidebars'],
            'sidebar'  => 'page_2',
        ]);
    }
}


/**
 * Fires after displaying page sidebar.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_sidebar_after', $_page);

echo '</div>';
echo '</article>';

get_footer();


/**
 * Fires after displaying page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_after', $_page);

// Freedom
unset($_page);
