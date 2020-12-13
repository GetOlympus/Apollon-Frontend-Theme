<?php

/**
 * Element part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_element = array_merge([
    'cover'  => false,
    'css'    => '',
    'data'   => [],
    'grid'   => false,
    'labels' => [],
    'metas'  => [],
    'part'   => 'title',
    'size'   => 'thumbnail',
], $_element);


/**
 * Override available element templates.
 *
 * @return array
 */
$_element['available'] = apply_filters('ol.apollon.element_available_files', [
    'title', 'author', 'categories', 'comments', 'content', 'date',
    'excerpt', 'metas', 'readingtime', 'readmore', 'thumbnail',
    '_el_close', '_el_open',
]);

// Check part availability
if (empty($_element['part']) || !in_array($_element['part'], $_element['available'])) {
    $_element['part'] = $_element['available'][0];
}

$_element['filename'] = $_element['part'].'.php';

// Check data
if (empty($_element['data']) && !in_array($_element['part'], ['_el_close', '_el_open'])) {
    return;
}


/**
 * Override element labels.
 *
 * @return array
 */
$_element['labels'] = apply_filters('ol.apollon.element_labels', array_merge([
    'by'       => __('apollon._.cpt.by', OL_APOLLON_DICTIONARY),
    'on'       => __('apollon._.cpt.on', OL_APOLLON_DICTIONARY),
    'readmore' => __('apollon._.cpt.readmore', OL_APOLLON_DICTIONARY),
], $_element['labels']));


/**
 * Override element vars.
 *
 * @return array
 */
$_element = apply_filters('ol.apollon.element_vars', $_element);


/**
 * Fires before displaying element part.
 *
 * @param  array   $_element
 */
do_action('ol.apollon.element_part_before', $_element);

// Include template
include __DIR__.S.$_element['filename'];


/**
 * Fires after displaying element part.
 *
 * @param  array   $_element
 */
do_action('ol.apollon.element_part_after', $_element);
