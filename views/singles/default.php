<?php

/**
 * Single default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_single)) {
    die('You are not authorized to directly access to this page');
}

// Single defaults
$_single = array_merge([
    'contents'  => [],
    'data'      => [],
    'labels'    => [],
    'options'   => [],
    'posttype'  => 'post',
    'thumbnail' => 'large',
], $_single);


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
 * Fires before displaying default single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_before', $_single);

get_header();

echo '<!-- container -->'."\n";

echo sprintf(
    '<article class="uk-section uk-container uk-container-%s">',
    $_single['options']['container']
);

echo sprintf(
    '<div class="uk-grid uk-flex-center uk-grid-%s" uk-grid>',
    $_single['options']['gridgap']
);

echo '<!-- content -->'."\n";

echo sprintf(
    '<main class="uk-width-1-1@s uk-width-%s@m uk-article">',
    $_single['options']['content']
);


/**
 * Fires before displaying default single blocks.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_blocks_before', $_single);

foreach ($_single['contents'] as $key => $value) {
    apollonGetPart('block.php', [
        'data'  => $_single['data'],
        'metas' => $value,
        'part'  => $key,
    ]);
}


/**
 * Fires after displaying default single blocks.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_blocks_after', $_single);

echo '</main>';


/**
 * Fires before displaying single sidebar.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_sidebar_before', $_single);

// Display sidebars
if ('left' === $_single['options']['sidebarpos']) {
    echo '<!-- sidebar -->'."\n";

    if ($_single['options']['sidebar1']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'_1',
        ]);
    }

    if ($_single['options']['sidebar2']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'_2',
        ]);
    }
}

if ('center' === $_single['options']['sidebarpos'] && $_single['options']['sidebar1']) {
    apollonGetPart('sidebar.php', [
        'css'      => 'uk-flex-first',
        'override' => $_single['options']['sidebars'],
        'sidebar'  => $_single['posttype'].'_1',
    ]);
}

if ('center' === $_single['options']['sidebarpos'] && $_single['options']['sidebar2']) {
    apollonGetPart('sidebar.php', [
        'override' => $_single['options']['sidebars'],
        'sidebar'  => $_single['posttype'].'_2',
    ]);
}

if ('right' === $_single['options']['sidebarpos']) {
    echo '<!-- sidebar -->'."\n";

    if ($_single['options']['sidebar1']) {
        apollonGetPart('sidebar.php', [
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'_1',
        ]);
    }

    if ($_single['options']['sidebar2']) {
        apollonGetPart('sidebar.php', [
            'override' => $_single['options']['sidebars'],
            'sidebar'  => $_single['posttype'].'_2',
        ]);
    }
}


/**
 * Fires after displaying single sidebar.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_sidebar_after', $_single);

echo '</div>';
echo '</article>';

get_footer();


/**
 * Fires after displaying default single.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_default_after', $_single);

// Freedom
unset($_single);
