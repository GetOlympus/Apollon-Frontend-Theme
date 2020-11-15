<?php

/**
 * Apollon footer hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// FOOTER

add_filter('ol.apollon.footer_default_options', function ($options) {
    return array_merge($options, [
        // Grid
        'grid_container' => apollonGetOption('grid_container'),

        // Top section
        'topsection_enable'     => apollonGetOption('topsection_enable'),
        'topsection_content_1'  => apollonGetOption('topsection_content_1'),
        'topsection_content_2'  => apollonGetOption('topsection_content_2'),
        'topsection_content_3'  => apollonGetOption('topsection_content_3'),
        'topsection_content_4'  => apollonGetOption('topsection_content_4'),
        'topsection_size_1'     => apollonGetOption('topsection_size_1'),
        'topsection_size_2'     => apollonGetOption('topsection_size_2'),
        'topsection_size_3'     => apollonGetOption('topsection_size_3'),
        'topsection_size_4'     => apollonGetOption('topsection_size_4'),
        'topsection_fullwidth'  => apollonGetOption('topsection_fullwidth'),
        'topsection_background' => apollonGetOption('topsection_background'),
        'topsection_fontsize'   => apollonGetOption('topsection_fontsize'),
        'topsection_lineheight' => apollonGetOption('topsection_lineheight'),
        'topsection_padding'    => apollonGetOption('topsection_padding'),

        // Main section
        'mainsection_enable'     => apollonGetOption('mainsection_enable'),
        'mainsection_content_1'  => apollonGetOption('mainsection_content_1'),
        'mainsection_content_2'  => apollonGetOption('mainsection_content_2'),
        'mainsection_content_3'  => apollonGetOption('mainsection_content_3'),
        'mainsection_content_4'  => apollonGetOption('mainsection_content_4'),
        'mainsection_size_1'     => apollonGetOption('mainsection_size_1'),
        'mainsection_size_2'     => apollonGetOption('mainsection_size_2'),
        'mainsection_size_3'     => apollonGetOption('mainsection_size_3'),
        'mainsection_size_4'     => apollonGetOption('mainsection_size_4'),
        'mainsection_fullwidth'  => apollonGetOption('mainsection_fullwidth'),
        'mainsection_background' => apollonGetOption('mainsection_background'),
        'mainsection_fontsize'   => apollonGetOption('mainsection_fontsize'),
        'mainsection_lineheight' => apollonGetOption('mainsection_lineheight'),
        'mainsection_padding'    => apollonGetOption('mainsection_padding'),

        // Sub section
        'subsection_enable'     => apollonGetOption('subsection_enable'),
        'subsection_content_1'  => apollonGetOption('subsection_content_1'),
        'subsection_content_2'  => apollonGetOption('subsection_content_2'),
        'subsection_content_3'  => apollonGetOption('subsection_content_3'),
        'subsection_content_4'  => apollonGetOption('subsection_content_4'),
        'subsection_size_1'     => apollonGetOption('subsection_size_1'),
        'subsection_size_2'     => apollonGetOption('subsection_size_2'),
        'subsection_size_3'     => apollonGetOption('subsection_size_3'),
        'subsection_size_4'     => apollonGetOption('subsection_size_4'),
        'subsection_fullwidth'  => apollonGetOption('subsection_fullwidth'),
        'subsection_background' => apollonGetOption('subsection_background'),
        'subsection_fontsize'   => apollonGetOption('subsection_fontsize'),
        'subsection_lineheight' => apollonGetOption('subsection_lineheight'),
        'subsection_padding'    => apollonGetOption('subsection_padding'),
    ]);
});
