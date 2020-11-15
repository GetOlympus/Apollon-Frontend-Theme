<?php

/**
 * Archive taxonomy
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_archive = [
    'sidebar'  => 'archive',
    'subtitle' => '',
    'suptitle' => __('Taxonomy', OL_APOLLON_DICTIONARY),
    'template' => 'taxonomy',
    'title'    => single_term_title('', false),
];


/**
 * Fires before displaying archive taxonomy.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_taxonomy_before', $_archive);

// Include template
include __DIR__.S.'archive'.S.'_archive.php';


/**
 * Fires after displaying archive taxonomy.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_taxonomy_after', $_archive);

// Freedom
unset($_archive);
