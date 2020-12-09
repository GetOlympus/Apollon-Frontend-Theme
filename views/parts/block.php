<?php

/**
 * BLock
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_block = isset($args) ? $args : [];


/**
 * Fires before displaying block.
 *
 * @param  array   $_block
 */
do_action('ol.apollon.block_before', $_block);

// Include template
include __DIR__.S.'block'.S.'_block.php';


/**
 * Fires after displaying block.
 *
 * @param  array   $_block
 */
do_action('ol.apollon.block_after', $_block);

// Freedom
unset($_block);
