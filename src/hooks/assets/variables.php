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
        // TYPOGRAPHY
        'global-font-family'       => apollonGetOption('global-font-family'),
        'global-font-size'         => apollonGetOption('global-font-size'),
        'global-line-height'       => apollonGetOption('global-line-height'),
        'global-small-font-size'   => apollonGetOption('global-small-font-size'),
        'global-medium-font-size'  => apollonGetOption('global-medium-font-size'),
        'global-large-font-size'   => apollonGetOption('global-large-font-size'),
        'global-xlarge-font-size'  => apollonGetOption('global-xlarge-font-size'),
        'global-2xlarge-font-size' => apollonGetOption('global-2xlarge-font-size'),
        'base-heading-font-family'    => apollonGetOption('base-heading-font-family'),
        'base-heading-font-weight'    => apollonGetOption('base-heading-font-weight'),
        'base-heading-text-transform' => apollonGetOption('base-heading-text-transform'),
        'base-heading-font-style'     => apollonGetOption('base-heading-font-style'),
        'base-heading-letter-spacing' => apollonGetOption('base-heading-letter-spacing'),
        // COLORS
        'global-color'            => apollonGetOption('global-color'),
        'global-default-color'    => '@global-color',
        'global-emphasis-color'   => apollonGetOption('global-emphasis-color'),
        'global-muted-color'      => apollonGetOption('global-muted-color'),
        'global-link-color'       => apollonGetOption('global-link-color'),
        'global-link-hover-color' => apollonGetOption('global-link-hover-color'),
        'global-inverse-color'    => apollonGetOption('global-inverse-color'),
        // BACKGROUNDS
        'global-background'           => apollonGetOption('global-background'),
        'global-default-background'   => '@global-background',
        'global-muted-background'     => apollonGetOption('global-muted-background'),
        'global-primary-background'   => apollonGetOption('global-primary-background'),
        'global-secondary-background' => apollonGetOption('global-secondary-background'),
        'global-success-background'   => apollonGetOption('global-success-background'),
        'global-warning-background'   => apollonGetOption('global-warning-background'),
        'global-danger-background'    => apollonGetOption('global-danger-background'),

        // FORMS INPUTS
        'form-placeholder-color'   => '@global-'.apollonGetOption('form-placeholder-color').'-color',
        'form-color'               => '@global-'.apollonGetOption('form-color').'-color',
        'form-background'          => '@global-'.apollonGetOption('form-background').'-background',
        'form-focus-color'         => '@global-'.apollonGetOption('form-focus-color').'-color',
        'form-focus-background'    => '@global-'.apollonGetOption('form-focus-background').'-background',
        'form-disabled-color'      => '@global-'.apollonGetOption('form-disabled-color').'-color',
        'form-disabled-background' => '@global-'.apollonGetOption('form-disabled-background').'-background',
        // FORMS WIDTHS
        'form-width-xsmall' => apollonGetOption('form-width-xsmall').'px',
        'form-width-small'  => apollonGetOption('form-width-small').'px',
        'form-width-medium' => apollonGetOption('form-width-medium').'px',
        'form-width-large'  => apollonGetOption('form-width-large').'px',

        // BUTTONS
        'global-border-width'  => apollonGetOption('global-border-width'),
        'global-border-radius' => apollonGetOption('global-border-radius').'px',
        'global-border'        => apollonGetOption('global-border').'px',
        'button-color'                => apollonGetOption('button-default-color'),
        'button-background'           => apollonGetOption('button-default-background'),
        'button-default-color'        => '@button-color',
        'button-default-background'   => '@button-background',
        'button-primary-color'        => apollonGetOption('button-primary-color'),
        'button-primary-background'   => apollonGetOption('button-primary-background'),
        'button-secondary-color'      => apollonGetOption('button-secondary-color'),
        'button-secondary-background' => apollonGetOption('button-secondary-background'),
        'button-danger-color'         => apollonGetOption('button-danger-color'),
        'button-danger-background'    => apollonGetOption('button-danger-background'),
        // BOX-SHADOWS
        'global-small-box-shadow'  => apollonGetOption('global-small-box-shadow'),
        'global-medium-box-shadow' => apollonGetOption('global-medium-box-shadow'),
        'global-large-box-shadow'  => apollonGetOption('global-large-box-shadow'),
        'global-xlarge-box-shadow' => apollonGetOption('global-xlarge-box-shadow'),
        // CONTROLS
        'global-control-height'         => apollonGetOption('global-control-height').'px',
        'global-control-default-height' => '@global-control-height',
        'global-control-small-height'   => apollonGetOption('global-control-small-height').'px',
        'global-control-large-height'   => apollonGetOption('global-control-large-height').'px',
        // NAVBARS
        'navbar-nav-item-font-size'         => apollonGetOption('navbar-nav-item-font-size').'px',
        'navbar-nav-item-height'            => apollonGetOption('navbar-nav-item-height').'px',
        'navbar-nav-item-default-font-size' => '@navbar-nav-item-font-size',
        'navbar-nav-item-default-height'    => '@navbar-nav-item-height',
        'navbar-nav-item-small-font-size'   => apollonGetOption('navbar-nav-item-small-font-size').'px',
        'navbar-nav-item-small-height'      => apollonGetOption('navbar-nav-item-small-height').'px',
        'navbar-nav-item-large-font-size'   => apollonGetOption('navbar-nav-item-large-font-size').'px',
        'navbar-nav-item-large-height'      => apollonGetOption('navbar-nav-item-large-height').'px',

        // SPACINGS
        'global-margin'         => apollonGetOption('global-margin').'px',
        'global-default-margin' => '@global-margin',
        'global-small-margin'   => apollonGetOption('global-small-margin').'px',
        'global-medium-margin'  => apollonGetOption('global-medium-margin').'px',
        'global-large-margin'   => apollonGetOption('global-large-margin').'px',
        'global-xlarge-margin'  => apollonGetOption('global-xlarge-margin').'px',
        // GUTTERS
        'global-gutter'         => apollonGetOption('global-gutter').'px',
        'global-default-gutter' => '@global-gutter',
        'global-small-gutter'   => apollonGetOption('global-small-gutter').'px',
        'global-medium-gutter'  => apollonGetOption('global-medium-gutter').'px',
        'global-large-gutter'   => apollonGetOption('global-large-gutter').'px',
        // Z-INDEX
        'global-z-index' => apollonGetOption('global-z-index'),

        // BREAKPOINTS
        'breakpoint-small'  => apollonGetOption('breakpoint-small').'px',
        'breakpoint-medium' => apollonGetOption('breakpoint-medium').'px',
        'breakpoint-large'  => apollonGetOption('breakpoint-large').'px',
        'breakpoint-xlarge' => apollonGetOption('breakpoint-xlarge').'px',

        // DROPDOWN
        'navbar-dropdown-color'      => '@global-'.apollonGetOption('dropdown-color').'-color',
        'navbar-dropdown-background' => '@global-'.apollonGetOption('dropdown-background').'-background',

        // NAVS
        'nav-top-font-size'   => '@navbar-nav-item-'.apollonGetOption('nav-top-font-size').'-font-size',
        'nav-top-height'      => '@navbar-nav-item-'.apollonGetOption('nav-top-height').'-height',
        'nav-top-background'  => '@global-'.apollonGetOption('nav-top-background').'-background',
        'nav-top-color'       => '@global-'.apollonGetOption('nav-top-color').'-color',
        'nav-main-font-size'  => '@navbar-nav-item-'.apollonGetOption('nav-main-font-size').'-font-size',
        'nav-main-height'     => '@navbar-nav-item-'.apollonGetOption('nav-main-height').'-height',
        'nav-main-background' => '@global-'.apollonGetOption('nav-main-background').'-background',
        'nav-main-color'      => '@global-'.apollonGetOption('nav-main-color').'-color',
        'nav-sub-font-size'   => '@navbar-nav-item-'.apollonGetOption('nav-sub-font-size').'-font-size',
        'nav-sub-height'      => '@navbar-nav-item-'.apollonGetOption('nav-sub-height').'-height',
        'nav-sub-background'  => '@global-'.apollonGetOption('nav-sub-background').'-background',
        'nav-sub-color'       => '@global-'.apollonGetOption('nav-sub-color').'-color',
    ]);
}, 10, 1);

add_filter('ol.apollon.assets_options_extra', function ($output) {
    // Hooks
    $output .= <<<EOT

.hook-button{border-radius: @global-border-radius}
.hook-base-heading{font-style: @base-heading-font-style; letter-spacing: @base-heading-letter-spacing}

.uk-nav-top .uk-icon svg{width: @nav-top-font-size}
.uk-nav-top{
    .uk-navbar-dropdown{background:@nav-top-background}
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav{
        font-size: @nav-top-font-size;
        min-height: @nav-top-height;
    }
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav,
    .uk-navbar-dropdown,.uk-navbar-dropdown-nav>li>a{
        color: @nav-top-color
    }
}

.uk-nav-main .uk-icon svg{width: @nav-main-font-size}
.uk-nav-main{
    .uk-navbar-dropdown{background:@nav-main-background}
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav{
        font-size: @nav-main-font-size;
        min-height: @nav-main-height;
    }
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav,
    .uk-navbar-dropdown,.uk-navbar-dropdown-nav>li>a{
        color: @nav-main-color
    }
}

.uk-nav-sub .uk-icon svg{width: @nav-sub-font-size}
.uk-nav-sub{
    .uk-navbar-dropdown{background:@nav-sub-background}
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav{
        font-size: @nav-sub-font-size;
        min-height: @nav-sub-height;
    }
    .uk-navbar-nav>li>a,.uk-navbar-item,.uk-navbar-toggle,.uk-navbar-dropdown-nav,
    .uk-navbar-dropdown,.uk-navbar-dropdown-nav>li>a{
        color: @nav-sub-color
    }
}

EOT;

    // Return output
    return $output;
}, 10, 1);
