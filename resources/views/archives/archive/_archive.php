<?php

/**
 * Archive part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_archive)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_archive = array_merge([
    'sidebar'  => 'page',
    'template' => 'front-page',
    'title'    => '',
], $_archive);


/**
 * Override available archive templates.
 *
 * @return array
 */
$_archive['available'] = apply_filters('ol.apollon.archive_files', [
    'author', 'category', 'date', 'front-page', 'index', 'search', 'tag'
]);

if (empty($_archive['template']) || !in_array($_archive['template'], $_archive['available'])) {
    $_archive['template'] = 'front-page';
    $_archive['title']    = '';
}

// Check sidebar
if (!in_array($_archive['sidebar'], ['page', 'blog', 'archive', 'search'])) {
    $_archive['sidebar'] = 'page';
}

$_archive['filename'] = !have_posts() ? '_404.php' : '_default.php';


/**
 * Fires before displaying archive part.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_part_before', $_archive);

get_header();

// Include template
include __DIR__.S.$_archive['filename'];

get_footer();


/**
 * Fires after displaying archive part.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_part_after', $_archive);
