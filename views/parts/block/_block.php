<?php

/**
 * Block part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_block = array_merge([
    'canvas' => false,
    'css'    => '',
    'data'   => [],
    'grid'   => false,
    'labels' => [],
    'metas'  => [],
    'part'   => 'title',
    'size'   => 'large',
], $_block);


/**
 * Override available block templates.
 *
 * @return array
 */
$_block['available'] = apply_filters('ol.apollon.block_available_files', [
    'title', 'author', 'categories', 'tags', 'commentform', 'comments', 'content',
    'date', 'excerpt', 'metas', 'readingtime', 'readmore', 'thumbnail',
    'social', 'nextprev', 'related'
]);

// Check part availability
if (empty($_block['part']) || !in_array($_block['part'], $_block['available'])) {
    return;
}

$_block['filename'] = $_block['part'].'.php';

// Check data
if (empty($_block['data'])) {
    return;
}


/**
 * Override block labels.
 *
 * @return array
 */
$_block['labels'] = apply_filters('ol.apollon.block_labels', array_merge([
    'by'       => __('apollon._.cpt.by', OL_APOLLON_DICTIONARY),
    'on'       => __('apollon._.cpt.on', OL_APOLLON_DICTIONARY),
    'readmore' => __('apollon._.cpt.readmore', OL_APOLLON_DICTIONARY),
    'share'    => __('apollon._.cpt.share', OL_APOLLON_DICTIONARY),
], $_block['labels']));


/**
 * Override block vars.
 *
 * @return array
 */
$_block = apply_filters('ol.apollon.block_vars', $_block);


/**
 * Fires before displaying block part.
 *
 * @param  array   $_block
 */
do_action('ol.apollon.block_part_before', $_block);

// Include template
include __DIR__.S.$_block['filename'];


/**
 * Fires after displaying block part.
 *
 * @param  array   $_block
 */
do_action('ol.apollon.block_part_after', $_block);
