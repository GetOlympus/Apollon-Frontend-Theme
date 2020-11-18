<?php

/**
 * Page part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_page)) {
    die('You are not authorized to directly access to this page');
}

// Include functions
include __DIR__.S.'_function.php';

the_post();

// Content starts
$_page = array_merge([
    'template' => 'default',
], $_page);


/**
 * Override available page templates.
 *
 * @return array
 */
$_page['available'] = apply_filters('ol.apollon.page_files', ['default', 'front-page']);

if (empty($_page['template']) || !in_array($_page['template'], $_page['available'])) {
    $_page['template'] = 'default';
}

$_page['filename'] = $_page['template'].'.php';


/**
 * Fires before displaying page part.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_part_before', $_page);

get_header();

// Include template
include __DIR__.S.$_page['filename'];

get_footer();


/**
 * Fires after displaying page part.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_part_after', $_page);
