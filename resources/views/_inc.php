<?php

/**
 * Includer start
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}


/**
 * Override included files.
 *
 * @param  array   $files
 *
 * @return array
 */
$files = apply_filters('ol.apollon.build_inc_files', [
    // Pages
    'single.php'      => 'pages'.S.'_custom-single.php',
    '404.php'         => 'pages'.S.'404.php',
    'image.php'       => 'pages'.S.'image.php',
    'page.php'        => 'pages'.S.'page.php',
    'single-post.php' => 'pages'.S.'single-post.php',

    // Archives
    'archive.php'     => 'archives'.S.'_custom-archive.php',
    'author.php'      => 'archives'.S.'author.php',
    'category.php'    => 'archives'.S.'category.php',
    'date.php'        => 'archives'.S.'date.php',
    'index.php'       => 'archives'.S.'index.php',
    'search.php'      => 'archives'.S.'search.php',
    'tag.php'         => 'archives'.S.'tag.php',
    'taxonomy.php'    => 'archives'.S.'taxonomy.php',

    // Parts
    '404-part.php'    => 'parts'.S.'404.php',
    'comments.php'    => 'parts'.S.'comments.php',
    'footer.php'      => 'parts'.S.'footer.php',
    'header.php'      => 'parts'.S.'header.php',
    'searchform.php'  => 'parts'.S.'searchform.php',
    'sidebar.php'     => 'parts'.S.'sidebar.php',

    // Apollon special cases
    'format.php'      => 'parts'.S.'format.php',
    'logo.php'        => 'parts'.S.'logo.php',
    'menu.php'        => 'parts'.S.'menu.php',
    'pagination.php'  => 'parts'.S.'pagination.php',
]);

$_inc = isset($_inc) ? $_inc : [];
$_inc = array_merge([
    'filename' => '404.php',
    'template' => $files['404.php'],
    'vars'     => [],
], $_inc);

if (array_key_exists($_inc['filename'], $files)) {
    $_inc['template'] = $files[$_inc['filename']];
}


/**
 * Fires before displaying inc.
 *
 * @param  array   $_inc
 */
do_action('ol.apollon.inc_before', $_inc);

// Include template
include __DIR__.S.$_inc['template'];


/**
 * Fires after displaying inc.
 *
 * @param  array   $_inc
 */
do_action('ol.apollon.inc_after', $_inc);

// Freedom
if (!isset($_inc['part']) || !$_inc['part']) {
    unset($_inc);
}
