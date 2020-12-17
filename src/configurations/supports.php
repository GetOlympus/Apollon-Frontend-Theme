<?php

/**
 * Add theme and post type supports.
 *
 * @category PHP
 * @package  ApollonFrontendTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see      https://developer.wordpress.org/reference/functions/add_post_type_support/
 */

return [
    /**
     * Comment every support you do not need.
     *
     * Set to "false" to remove the theme support.
     */


    /**
     * Special case: for post type support, use the "post_type" key
     *
     * @see http://codex.wordpress.org/Function_Reference/add_post_type_support
     * @see http://codex.wordpress.org/Function_Reference/remove_post_type_support
     */
    'post_type' => [
        /**
         * Comment every support you do not need.
         *
         * @var     string  $key    The post_type slug.
         * @param   array   $args   The features to add with the action to make (add or remove).
         */
        // Supports can be:
        //  'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks'
        //  'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'
        'page' => [
            'add'    => ['excerpt', 'revisions'],
            'remove' => ['thumbnail'],
        ],
    ],


    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Formats
     */
    //'post-formats' => ['aside', 'chat', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio'],
    'post-formats' => ['image'],

    /**
     * Set an empty array as $args for all post types
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    'post-thumbnails' => ['post', 'page', 'video', 'game'],

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Background
     */
    'custom-background' => false,

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Header
     */
    'custom-header' => false,

    /**
     * Set an empty array as $args for default vars
     *
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Logo
     */
    'custom-logo' => false,

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
     */
    //'automatic-feed-links' => false,

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
     */
    'html5' => ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption'],

    /**
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
     */
    'title-tag' => [],


    /**
     * Add your own theme supports here.
     */
    'woocommerce' => [],
    'wc-product-gallery-slider'   => [],
    'wc-product-gallery-zoom'     => [],
    'wc-product-gallery-lightbox' => [],
    'auto-load-next-post' => [],
];
