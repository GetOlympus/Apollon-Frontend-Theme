<?php

/**
 * Single part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_single)) {
    die('You are not authorized to directly access to this page');
}

// Include functions
include __DIR__.S.'_function.php';

the_post();

// Content starts
$_single = array_merge([
    'template' => 'post',
], $_single);


/**
 * Override available single templates.
 *
 * @return array
 */
$_single['available'] = apply_filters('ol.apollon.single_files', ['custom', 'post']);

if (empty($_single['template']) || !in_array($_single['template'], $_single['available'])) {
    $_single['template'] = 'custom';
}

$_single['filename'] = $_single['template'].'.php';


/**
 * Fires before displaying single part.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_part_before', $_single);

// Include template
include __DIR__.S.$_single['filename'];


/**
 * Fires after displaying single part.
 *
 * @param  array   $_single
 */
do_action('ol.apollon.single_part_after', $_single);
