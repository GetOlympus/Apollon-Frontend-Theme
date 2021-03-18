<?php

/**
 * Apollon assets variables hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.assets_options', function ($vars) {
    return array_merge($vars, [
        // BREAKPOINTS
        'breakpoint-small'  => apollonGetOption('breakpoint-small'),
        'breakpoint-medium' => apollonGetOption('breakpoint-medium'),
        'breakpoint-large'  => apollonGetOption('breakpoint-large'),
        'breakpoint-xlarge' => apollonGetOption('breakpoint-xlarge'),
        // TYPOGRAPHY
        'global-font-family'       => apollonGetOption('global-font-family'),
        'global-font-size'         => apollonGetOption('global-font-size'),
        'global-line-height'       => apollonGetOption('global-line-height'),
        'global-small-font-size'   => apollonGetOption('global-small-font-size'),
        'global-medium-font-size'  => apollonGetOption('global-medium-font-size'),
        'global-large-font-size'   => apollonGetOption('global-large-font-size'),
        'global-xlarge-font-size'  => apollonGetOption('global-xlarge-font-size'),
        'global-2xlarge-font-size' => apollonGetOption('global-2xlarge-font-size'),
        // HEADINGS
        'heading-font-family'    => apollonGetOption('heading-font-family'),
        'heading-font-weight'    => apollonGetOption('heading-font-weight'),
        'heading-font-style'     => apollonGetOption('heading-font-style'),
        'heading-letter-spacing' => apollonGetOption('heading-letter-spacing'),
        'heading-text-transform' => apollonGetOption('heading-text-transform'),
        // COLORS
        'global-color'            => apollonGetOption('global-color'),
        'global-emphasis-color'   => apollonGetOption('global-emphasis-color'),
        'global-muted-color'      => apollonGetOption('global-muted-color'),
        'global-link-color'       => apollonGetOption('global-link-color'),
        'global-link-hover-color' => apollonGetOption('global-link-hover-color'),
        'global-inverse-color'    => apollonGetOption('global-inverse-color'),
        // BACKGROUNDS
        'global-background'           => apollonGetOption('global-background'),
        'global-default-background'   => apollonGetOption('global-background'),
        'global-muted-background'     => apollonGetOption('global-muted-background'),
        'global-primary-background'   => apollonGetOption('global-primary-background'),
        'global-secondary-background' => apollonGetOption('global-secondary-background'),
        'global-success-background'   => apollonGetOption('global-success-background'),
        'global-warning-background'   => apollonGetOption('global-warning-background'),
        'global-danger-background'    => apollonGetOption('global-danger-background'),
        // BORDERS
        'global-border-width'  => apollonGetOption('global-border-width'),
        'global-border-radius' => apollonGetOption('global-border-radius'),
        'global-border'        => apollonGetOption('global-border'),
        // BOX-SHADOWS
        'global-small-box-shadow'  => apollonGetOption('global-small-box-shadow'),
        'global-medium-box-shadow' => apollonGetOption('global-medium-box-shadow'),
        'global-large-box-shadow'  => apollonGetOption('global-large-box-shadow'),
        'global-xlarge-box-shadow' => apollonGetOption('global-xlarge-box-shadow'),
        // SPACINGS
        'global-margin'        => apollonGetOption('global-margin'),
        'global-small-margin'  => apollonGetOption('global-small-margin'),
        'global-medium-margin' => apollonGetOption('global-medium-margin'),
        'global-large-margin'  => apollonGetOption('global-large-margin'),
        'global-xlarge-margin' => apollonGetOption('global-xlarge-margin'),
        // GUTTERS
        'global-gutter'        => apollonGetOption('global-gutter'),
        'global-small-gutter'  => apollonGetOption('global-small-gutter'),
        'global-medium-gutter' => apollonGetOption('global-medium-gutter'),
        'global-large-gutter'  => apollonGetOption('global-large-gutter'),
        // CONTROLS
        'global-control-height'       => apollonGetOption('global-control-height'),
        'global-control-small-height' => apollonGetOption('global-control-small-height'),
        'global-control-large-height' => apollonGetOption('global-control-large-height'),
        // Z-INDEX
        'global-z-index' => apollonGetOption('global-z-index'),
        // NAVBARS
        'navbar-nav-top-item-height'     => apollonGetOption('nav-top-height'),
        'navbar-nav-top-item-font-size'  => apollonGetOption('nav-top-font-size'),
        'navbar-nav-main-item-height'    => apollonGetOption('nav-main-height'),
        'navbar-nav-main-item-font-size' => apollonGetOption('nav-main-font-size'),
        'navbar-nav-sub-item-height'     => apollonGetOption('nav-sub-height'),
        'navbar-nav-sub-item-font-size'  => apollonGetOption('nav-sub-font-size'),
        // DROPDOWN
        'dropdown-background' => '@global-'.apollonGetOption('dropdown-background').'-background',
    ]);
}, 10, 1);

add_filter('ol.apollon.assets_options_extra', function ($output) {
    // Hooks
    $output .= <<<EOT

.hook-button{border-radius: @global-border-radius}
.hook-navbar-dropdown{background: @dropdown-background}
.hook-base-heading{
    font-family: @heading-font-family;
    font-weight: @heading-font-weight;
    letter-spacing: @heading-letter-spacing;
    text-transform: @heading-text-transform;
}
.uk-nav-top .uk-navbar-nav>li>a, .uk-nav-top .uk-navbar-item, .uk-nav-top .uk-navbar-toggle{
    font-size: @navbar-nav-top-item-font-size;
    min-height: @navbar-nav-top-item-height;
}
.uk-nav-main .uk-navbar-nav>li>a, .uk-nav-main .uk-navbar-item, .uk-nav-main .uk-navbar-toggle{
    font-size: @navbar-nav-main-item-font-size;
    min-height: @navbar-nav-main-item-height;
}
.uk-nav-sub .uk-navbar-nav>li>a, .uk-nav-sub .uk-navbar-item, .uk-nav-sub .uk-navbar-toggle{
    font-size: @navbar-nav-sub-item-font-size;
    min-height: @navbar-nav-sub-item-height;
}
EOT;

    // Return output
    return $output;
}, 10, 1);
