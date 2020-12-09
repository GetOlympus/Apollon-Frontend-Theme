<?php

/**
 * Archive part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_loop = array_merge([
    'sidebar'  => 'page',
    'template' => 'front-page',
    'title'    => '',
], $_loop);


/**
 * Override available archive templates.
 *
 * @return array
 */
$_loop['available'] = apply_filters('ol.apollon.archive_files', [
    'author', 'category', 'date', 'front-page', 'index', 'search', 'tag'
]);

if (empty($_loop['template']) || !in_array($_loop['template'], $_loop['available'])) {
    $_loop['template'] = 'front-page';
    $_loop['title']    = '';
}

// Check sidebar
if (!in_array($_loop['sidebar'], ['page', 'blog', 'archive', 'search'])) {
    $_loop['sidebar'] = 'page';
}

$_loop['filename'] = !have_posts() ? '_404.php' : '_default.php';


/**
 * Fires before displaying archive part.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.archive_part_before', $_loop);

get_header();

// Include template
include __DIR__.S.$_loop['filename'];

get_footer();


/**
 * Fires after displaying archive part.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.archive_part_after', $_loop);
