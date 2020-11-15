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
    'scripts'   => [
        /**
         * @var     string  $handle The file uniq handle.
         * @param   string  $args   The file arguments.
         */
        'jquery'        => false,
        'jquery-migrate'=> false,

        /*'jqueryfooter'  => [
            'src'       => includes_url('/js/jquery/jquery.js'),
            'deps'      => [],
            'ver'       => false,
            'in_footer' => true,
        ],*/
    ],

    /**
     * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     */
    'styles'    => [
        /**
         * @var     string  $handle The file uniq handle.
         * @param   string  $args   The file arguments.
         */
        /*'gfonts'        => [
            'src'   => 'https://fonts.googleapis.com/css?family=Oswald|Merriweather',
            'deps'  => [],
            'ver'   => false,
            'media' => 'all',
        ],*/
    ]
];
