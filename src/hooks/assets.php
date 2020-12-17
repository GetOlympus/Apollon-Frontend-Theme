<?php

/**
 * Apollon assets hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.assets_base_dir', function ($dir = null) {
    return trailingslashit(get_stylesheet_directory()).'app'.S.'css'.S;
});

add_filter('ol.apollon.assets_base_url', function ($dir = null) {
    return trailingslashit(get_stylesheet_directory_uri()).'app/css/';
});

add_filter('ol.apollon.assets_css_in_file', function ($status) {
    return (bool) !!('css' === apollonGetOption('css_location', 'inline'));
}, 10, 1);

add_filter('ol.apollon.assets_mode_smart', function ($vars) {

    return $output;
}, 10, 1);

add_filter('ol.apollon.assets_options', function ($vars) {
    return [
        // COLORS
        'color_primary'    => apollonGetOption('color_primary'),
        'color_secondary'  => apollonGetOption('color_secondary'),
        'color_muted'      => apollonGetOption('color_muted'),
        'color_neutral'    => apollonGetOption('color_neutral'),
        'color_background' => apollonGetOption('color_background'),
        'color_red'        => apollonGetOption('color_red'),
        'color_yellow'     => apollonGetOption('color_yellow'),
        'color_green'      => apollonGetOption('color_green'),
        'color_blue'       => apollonGetOption('color_blue'),
        'color_teal'       => apollonGetOption('color_teal'),
        'color_purple'     => apollonGetOption('color_purple'),
        'color_darkneutral_dark'   => apollonGetOption('color_darkneutral_dark'),
        'color_darkneutral_light'  => apollonGetOption('color_darkneutral_light'),
        'color_midneutral_dark'    => apollonGetOption('color_midneutral_dark'),
        'color_midneutral_light'   => apollonGetOption('color_midneutral_light'),
        'color_lightneutral_dark'  => apollonGetOption('color_lightneutral_dark'),
        'color_lightneutral_light' => apollonGetOption('color_lightneutral_light'),
        'color_red_dark'     => apollonGetOption('color_red_dark'),
        'color_red_light'    => apollonGetOption('color_red_light'),
        'color_yellow_dark'  => apollonGetOption('color_yellow_dark'),
        'color_yellow_light' => apollonGetOption('color_yellow_light'),
        'color_green_dark'   => apollonGetOption('color_green_dark'),
        'color_green_light'  => apollonGetOption('color_green_light'),
        'color_blue_dark'    => apollonGetOption('color_blue_dark'),
        'color_blue_light'   => apollonGetOption('color_blue_light'),
        'color_teal_dark'    => apollonGetOption('color_teal_dark'),
        'color_teal_light'   => apollonGetOption('color_teal_light'),
        'color_purple_dark'  => apollonGetOption('color_purple_dark'),
        'color_purple_light' => apollonGetOption('color_purple_light'),

        // NAVBARS
        'navbar_height'   => apollonGetOption('navbar_height'),
        'navbar_fontsize' => apollonGetOption('navbar_fontsize'),

        // TYPOGRAPHY
        'typo_mainfont'        => apollonGetOption('typo_mainfont'),
        'typo_secondaryfont'   => apollonGetOption('typo_secondaryfont'),
        'typo_alternativefont' => apollonGetOption('typo_alternativefont'),
        'typo_bodysize'        => apollonGetOption('typo_bodysize').'px',
        'typo_lineheight'      => apollonGetOption('typo_lineheight').'px',
        'typo_smallsize'       => apollonGetOption('typo_smallsize').'px',
        'typo_listsize'        => apollonGetOption('typo_listsize').'px',
        'typo_listlineheight'  => apollonGetOption('typo_listlineheight').'px',
        'typo_h1size'          => apollonGetOption('typo_h1size').'px',
        'typo_h2size'          => apollonGetOption('typo_h2size').'px',
        'typo_h3size'          => apollonGetOption('typo_h3size').'px',
        'typo_h4size'          => apollonGetOption('typo_h4size').'px',
        'typo_h5size'          => apollonGetOption('typo_h5size').'px',
        'typo_h6size'          => apollonGetOption('typo_h6size').'px',
    ];
}, 10, 1);

add_filter('ol.apollon.assets_output', function ($output = '') {
    /**
     * Override css options.
     *
     * @return array
     */
    $options = apply_filters('ol.apollon.assets_options', []);

    $vars = [
        'breakpoint-small'      => '640px',
        'breakpoint-medium'     => '960px',
        'breakpoint-large'      => '1200px',
        'breakpoint-xlarge'     => '1600px',
        'breakpoint-xsmall-max' => '(@breakpoint-small - 1)',
        'breakpoint-small-max'  => '(@breakpoint-medium - 1)',
        'breakpoint-medium-max' => '(@breakpoint-large - 1)',
        'breakpoint-large-max'  => '(@breakpoint-xlarge - 1)',
        // Typography
        'global-font-family'       => $options['typo_mainfont'],
        'global-font-size'         => '16px',
        'global-line-height'       => '1.5',
        'global-2xlarge-font-size' => '2.625rem',
        'global-xlarge-font-size'  => '2rem',
        'global-large-font-size'   => '1.5rem',
        'global-medium-font-size'  => '1.25rem',
        'global-small-font-size'   => '.875rem',
        // Colors
        'global-color'            => $options['color_neutral'],
        'global-emphasis-color'   => '#333',
        'global-muted-color'      => $options['color_muted'],
        'global-link-color'       => $options['color_primary'],
        'global-link-hover-color' => 'darken(@global-link-color, 5%)',
        'global-inverse-color'    => $options['color_background'],
        // Backgrounds
        'global-background'           => $options['color_background'],
        'global-muted-background'     => '@global-muted-color',
        'global-primary-background'   => '@global-link-color',
        'global-secondary-background' => $options['color_secondary'],
        'global-success-background'   => $options['color_green'],
        'global-warning-background'   => $options['color_yellow'],
        'global-danger-background'    => $options['color_red'],
        // Borders
        'global-border-width' => '1px',
        'global-border'       => '#e5e5e5',
        // Box-Shadows
        'global-small-box-shadow'  => '0 2px 8px rgba(0,0,0,.08)',
        'global-medium-box-shadow' => '0 5px 15px rgba(0,0,0,.08)',
        'global-large-box-shadow'  => '0 14px 25px rgba(0,0,0,.16)',
        'global-xlarge-box-shadow' => '0 28px 50px rgba(0,0,0,.16)',
        // Spacings
        'global-margin'        => '20px',
        'global-small-margin'  => '10px',
        'global-medium-margin' => '40px',
        'global-large-margin'  => '70px',
        'global-xlarge-margin' => '140px',
        'global-gutter'        => '30px',
        'global-small-gutter'  => '15px',
        'global-medium-gutter' => '40px',
        'global-large-gutter'  => '70px',
        // Controls
        'global-control-height'       => '40px',
        'global-control-small-height' => '30px',
        'global-control-large-height' => '55px',
        // Z-index
        'global-z-index' => 1000,
        // Navbars
        'navbar-nav-item-height'    => $options['navbar_height'].'px',
        'navbar-nav-item-font-size' => $options['navbar_fontsize'].'px',
    ];

    $output = '/** This file is auto-generated at '.date(DATE_RFC2822).' */'."\n\n";

    foreach ($vars as $attr => $value) {
        $output .= '@'.$attr.': '.(string)$value.';'."\n";
    }

    return $output;
}, 10, 1);
