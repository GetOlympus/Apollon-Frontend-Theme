<?php

/**
 * Add enqueued frontend scripts and styles.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    /**
     * @see https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     */
    'scripts' => [
        /**
         * @var     string  $handle The file uniq handle.
         * @param   string  $args   The file arguments.
         */
        'jquery'         => false,
        'jquery-migrate' => false,

        'uikitjs' => [
            'src'       => '//cdn.jsdelivr.net/npm/uikit@'.OL_APOLLON_UIKIT.'/dist/js/uikit.min.js',
            'deps'      => [],
            'ver'       => false,
            'in_footer' => false,
        ],
        'uikiticonsjs' => [
            'src'       => '//cdn.jsdelivr.net/npm/uikit@'.OL_APOLLON_UIKIT.'/dist/js/uikit-icons.min.js',
            'deps'      => ['uikitjs'],
            'ver'       => false,
            'in_footer' => false,
        ],
    ],

    /**
     * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     */
    'styles'  => [
        /**
         * @var     string  $handle The file uniq handle.
         * @param   string  $args   The file arguments.
         */
        'gfonts' => [
            'src'   => 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap',
            'deps'  => [],
            'ver'   => false,
            'media' => 'all',
        ],
    ],
];
