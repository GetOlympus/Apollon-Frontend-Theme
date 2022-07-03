<?php

/**
 * Apollon defaults options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

// Set default WP vars
$posts_per_page = get_option('posts_per_page');
$post_types     = get_post_types();
$show_on_front  = get_option('show_on_front');

// Set default fonts
$mainfonts  = '-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Fira Sans",';
$mainfonts .= ' "Droid Sans", "Helvetica Neue", sans-serif';

$headingfonts  = 'ProximaNova,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';

$codefonts  = '"SFMono-Medium", "SF Mono", "Segoe UI Mono", "Roboto Mono", "Ubuntu Mono",';
$codefonts .= ' Menlo, Consolas, Courier, monospace';

return [
    // WORDPRESS

    'wp-postsperpage' => $posts_per_page,
    'wp-posttypes'    => $post_types,
    'wp-showonfront'  => $show_on_front,


    // DESIGN

    'css-location' => 'css',

    // Foundations

    'global-font-family'       => $mainfonts,
    'global-font-size'         => '16px',
    'global-line-height'       => '1.5',
    'global-small-font-size'   => '.875rem',
    'global-medium-font-size'  => '1.25rem',
    'global-large-font-size'   => '1.5rem',
    'global-xlarge-font-size'  => '2rem',
    'global-2xlarge-font-size' => '2.625rem',
    'base-heading-font-family'    => $headingfonts,
    'base-heading-font-weight'    => 600,
    'base-heading-font-style'     => 'inherit',
    'base-heading-letter-spacing' => 'normal',
    'base-heading-text-transform' => 'uppercase',

    'global-color'            => '#777',
    'global-emphasis-color'   => '#333',
    'global-muted-color'      => '#999',
    'global-link-color'       => '#1e87f0',
    'global-link-hover-color' => '#0f6ecd',
    'global-inverse-color'    => '#fff',

    'global-background'           => '#fff',
    'global-muted-background'     => '#f8f8f8',
    'global-primary-background'   => '#1e87f0',
    'global-secondary-background' => '#222',
    'global-success-background'   => '#32d296',
    'global-warning-background'   => '#faa05a',
    'global-danger-background'    => '#f0506e',

    // Form

    'form-placeholder-color'   => 'muted',
    'form-color'               => 'default',
    'form-background'          => 'muted',
    'form-focus-color'         => 'default',
    'form-focus-background'    => 'muted',
    'form-disabled-color'      => 'default',
    'form-disabled-background' => 'muted',

    'form-width-xsmall' => 50,
    'form-width-small'  => 130,
    'form-width-medium' => 200,
    'form-width-large'  => 500,

    // Buttons

    'global-border'               => '#e5e5e5',
    'global-border-radius'        => 0,
    'global-border-width'         => 1,
    'button-default-color'        => '#333',
    'button-default-background'   => '#f8f8f8',
    'button-primary-color'        => '#fff',
    'button-primary-background'   => '#1e87f0',
    'button-secondary-color'      => '#fff',
    'button-secondary-background' => '#222',
    'button-danger-color'         => '#fff',
    'button-danger-background'    => '#f0506e',

    'global-small-box-shadow'  => '0 2px 8px rgba(0,0,0,0.08)',
    'global-medium-box-shadow' => '0 5px 15px rgba(0,0,0,0.08)',
    'global-large-box-shadow'  => '0 14px 25px rgba(0,0,0,0.16)',
    'global-xlarge-box-shadow' => '0 28px 50px rgba(0,0,0,0.16)',

    'global-control-height'       => 40,
    'global-control-small-height' => 30,
    'global-control-large-height' => 55,

    'navbar-nav-item-font-size'       => 14,
    'navbar-nav-item-height'          => 60,
    'navbar-nav-item-small-font-size' => 12,
    'navbar-nav-item-small-height'    => 40,
    'navbar-nav-item-large-font-size' => 16,
    'navbar-nav-item-large-height'    => 80,

    // Spacings

    'global-margin'        => 20,
    'global-small-margin'  => 10,
    'global-medium-margin' => 40,
    'global-large-margin'  => 70,
    'global-xlarge-margin' => 140,

    'global-gutter'        => 30,
    'global-small-gutter'  => 15,
    'global-medium-gutter' => 40,
    'global-large-gutter'  => 70,

    'global-z-index' => 1000,

    // Responsive

    'breakpoint-small'  => 640,
    'breakpoint-medium' => 960,
    'breakpoint-large'  => 1200,
    'breakpoint-xlarge' => 1600,

    // COMPONENTS

    // Core

    // Skeleton

    'divider-icon' => false,

    // Navs

    'nav-menu'   => __('apollon.cz.components.nav.menu.placeholder', OL_APOLLON_DICTIONARY),
    'nav-shadow' => 'none',
    'nav-sticky' => 'static',

    // Elements

    'dropdown-color'      => 'default',
    'dropdown-background' => 'muted',
    'dropdown-shadow'     => 'small',
    'dropdown-click'      => false,
    'dropdown-position'   => 'default',


    // GENERAL

    'opengraph-enable'      => false,
    'opengraph-twitter'     => '',
    'opengraph-facebook'    => '',
    'opengraph-facebookapp' => '',

    'logo-default'    => '',
    'logo-retina'     => '',
    'logo-max-width'  => 160,
    'logo-max-height' => 0,
    'logo-slogan'     => false,


    // FEATURES

    // Core

    'searchform-enable'              => false,
    'searchform-post-types'          => false,
    'searchform-title-only'          => false,
    'searchform-posts-per-page'      => 'post',
    'searchform-live-search'         => false,
    'searchform-header-layout'       => 'default',
    'searchform-dropbar'             => 'slide',
    'searchform-page-layout'         => 'default',
    'searchform-post-types-dropdown' => false,
    'searchform-submit-button'       => false,

    'sidebar-enable'       => false,
    //'sidebar-1-enable'     => true,
    'sidebar-1-mobile'     => false,
    'sidebar-1-sticky'     => false,
    'sidebar-1-size'       => '1-5',
    'sidebar-1-background' => 'transparent',
    //'sidebar-2-enable'     => true,
    'sidebar-2-mobile'     => false,
    'sidebar-2-sticky'     => false,
    'sidebar-2-size'       => '1-5',
    'sidebar-2-background' => 'transparent',

    'comments-enable'        => false,
    'comments-avatar'        => true,
    'comments-website'       => true,
    'comments-htmltags'      => false,
    'comments-header'        => true,
    'comments-list-layout'   => 'default',
    'comments-form-layout'   => 'default',
    'comments-form-stacked'  => false,
    'comments-labels'        => true,
    'comments-highlight'     => false,
    'comments-form-position' => 'bottom',
    'comments-navs-position' => 'bottom',

    // Theme

    'social-enable' => true,
    'social-icons'  => ['twitter', 'facebook'],

    'backtotop-enable'   => false,
    'backtotop-label'    => '',
    'backtotop-icon'     => true,
    'backtotop-mobile'   => true,
    'backtotop-margin'   => 'small',
    'backtotop-position' => 'right',
    'backtotop-style'    => 'secondary',

    'pagination-enable'         => false,
    'pagination-first'          => false,
    'pagination-previous'       => true,
    'pagination-next'           => true,
    'pagination-last'           => false,
    'pagination-icons'          => true,
    'pagination-range'          => 4,
    'pagination-separator'      => '...',
    'pagination-nums'           => true,
    'pagination-template'       => 'default',
    'pagination-position'       => 'center',
    'pagination-title'          => __('apollon.cz.features.pagination.title.placeholder', OL_APOLLON_DICTIONARY),
    'pagination-infinite-label' => false,

    // Extra

    /*'breadcrumb-enable' => false,
    'navs-enable'       => false,
    'ads-enable'        => false,
    'adblocker-enable'  => false,*/


    // LAYOUT

    // Website

    'website-border-color' => 'transparent',
    'website-border-mode'  => 'full',
    'website-border-width' => 0,

    'website-posttypes'        => ['post'],
    'website-container'        => 'xlarge',
    'website-content'          => 'expand',
    'website-columns'          => 1,
    'website-gap'              => 'small',
    'website-divider'          => false,
    'website-match-height'     => false,
    'website-sidebar-position' => 'left',
    'website-sidebar-1'        => true,
    'website-sidebar-2'        => false,
    'website-sidebars'         => true,

    // Header

    'nav-top-enable'      => false,
    'nav-top-custom-text' => '',
    'nav-top-content-1'   => '',
    'nav-top-content-2'   => '',
    'nav-top-content-3'   => '',
    'nav-top-mobile'      => false,
    'nav-top-template'    => 'left',
    'nav-top-full-width'  => false,
    'nav-top-color'       => 'link',
    'nav-top-background'  => 'secondary',
    'nav-top-font-size'   => 'small',
    'nav-top-height'      => 'small',
    'nav-top-padding'     => 'default',

    'nav-main-enable'      => true,
    'nav-main-custom-text' => '',
    'nav-main-content-1'   => 'logo',
    'nav-main-content-2'   => 'menu',
    'nav-main-content-3'   => 'search',
    'nav-main-mobile'      => true,
    'nav-main-template'    => 'left',
    'nav-main-full-width'  => false,
    'nav-main-color'       => 'emphasis',
    'nav-main-background'  => 'default',
    'nav-main-font-size'   => 'large',
    'nav-main-height'      => 'large',
    'nav-main-padding'     => 'default',

    'nav-sub-enable'      => true,
    'nav-sub-custom-text' => '',
    'nav-sub-content-1'   => '',
    'nav-sub-content-2'   => 'menu',
    'nav-sub-content-3'   => '',
    'nav-sub-mobile'      => false,
    'nav-sub-template'    => 'left',
    'nav-sub-full-width'  => false,
    'nav-sub-color'       => 'emphasis',
    'nav-sub-background'  => 'default',
    'nav-sub-font-size'   => 'default',
    'nav-sub-height'      => 'default',
    'nav-sub-padding'     => 'default',

    // Footer

    'section-top-enable'      => false,
    'section-top-content-1'   => '',
    'section-top-content-2'   => '',
    'section-top-content-3'   => '',
    'section-top-content-4'   => '',
    'section-top-mobile'      => false,
    'section-top-size-1'      => '1-4',
    'section-top-size-2'      => '1-4',
    'section-top-size-3'      => '1-4',
    'section-top-size-4'      => '1-4',
    'section-top-template'    => 'left',
    'section-top-full-width'  => true,
    'section-top-color'       => 'dark',
    'section-top-background'  => 'secondary',
    'section-top-font-size'   => 14,
    'section-top-line-height' => 20,
    'section-top-padding'     => 'default',

    'section-main-enable'      => false,
    'section-main-content-1'   => '',
    'section-main-content-2'   => '',
    'section-main-content-3'   => '',
    'section-main-content-4'   => '',
    'section-main-mobile'      => false,
    'section-main-size-1'      => '1-4',
    'section-main-size-2'      => '1-4',
    'section-main-size-3'      => '1-4',
    'section-main-size-4'      => '1-4',
    'section-main-template'    => 'left',
    'section-main-full-width'  => true,
    'section-main-color'       => 'dark',
    'section-main-background'  => 'secondary',
    'section-main-font-size'   => 14,
    'section-main-line-height' => 20,
    'section-main-padding'     => 'default',

    'section-sub-enable'      => false,
    'section-sub-content-1'   => '',
    'section-sub-content-2'   => '',
    'section-sub-content-3'   => '',
    'section-sub-content-4'   => '',
    'section-sub-mobile'      => false,
    'section-sub-size-1'      => '1-4',
    'section-sub-size-2'      => '1-4',
    'section-sub-size-3'      => '1-4',
    'section-sub-size-4'      => '1-4',
    'section-sub-template'    => 'left',
    'section-sub-full-width'  => true,
    'section-sub-color'       => 'dark',
    'section-sub-background'  => 'secondary',
    'section-sub-font-size'   => 14,
    'section-sub-line-height' => 20,
    'section-sub-padding'     => 'default',

    // Loops

    'homepage-use-default'      => true,
    'homepage-posttypes'        => ['post'],
    'homepage-container'        => 'xlarge',
    'homepage-content'          => 'expand',
    'homepage-columns'          => 1,
    'homepage-gap'              => 'small',
    'homepage-divider'          => false,
    'homepage-match-height'     => false,
    'homepage-sidebar-position' => 'left',
    'homepage-sidebar-1'        => true,
    'homepage-sidebar-2'        => false,

    'archives-use-default'      => true,
    'archives-posttypes'        => ['post'],
    'archives-container'        => 'xlarge',
    'archives-content'          => 'expand',
    'archives-columns'          => 1,
    'archives-gap'              => 'small',
    'archives-divider'          => false,
    'archives-match-height'     => false,
    'archives-sidebar-position' => 'left',
    'archives-sidebar-1'        => true,
    'archives-sidebar-2'        => false,
    'archives-sidebars'         => false,

    'search-use-default'      => true,
    'search-posttypes'        => ['post'],
    'search-container'        => 'xlarge',
    'search-content'          => 'expand',
    'search-columns'          => 1,
    'search-gap'              => 'small',
    'search-divider'          => false,
    'search-match-height'     => false,
    'search-sidebar-position' => 'left',
    'search-sidebar-1'        => true,
    'search-sidebar-2'        => false,
    'search-sidebars'         => false,

    // Pages

    'frontpage-use-default'      => true,
    'frontpage-container'        => 'xlarge',
    'frontpage-content'          => 'expand',
    'frontpage-feature'          => false,
    'frontpage-extend'           => true,
    'frontpage-header'           => ['thumbnail', 'title'],
    'frontpage-elements'         => ['thumbnail', 'title', 'metas'],
    'frontpage-metas'            => ['author', 'date'],
    'frontpage-sidebar-position' => 'left',
    'frontpage-sidebar-1'        => true,
    'frontpage-sidebar-2'        => false,

    'page-use-default'      => true,
    'page-container'        => 'xlarge',
    'page-content'          => 'expand',
    'page-feature'          => false,
    'page-extend'           => true,
    'page-header'           => ['thumbnail', 'title'],
    'page-elements'         => ['thumbnail', 'title', 'metas'],
    'page-metas'            => ['author', 'date'],
    'page-sidebar-position' => 'left',
    'page-sidebar-1'        => true,
    'page-sidebar-2'        => false,
    'page-sidebars'         => false,

    '404-use-default' => true,
    '404-container'   => 'xlarge',
    '404-content'     => 'expand',

    'attachment-use-default' => true,
    'attachment-container'   => 'xlarge',
    'attachment-content'     => 'expand',

    // Cpts

    'post-loop-template'       => 'default',
    'post-loop-thumbnail'      => 'thumbnail',
    'post-loop-title-tag'      => 'h2',
    'post-loop-title-style'    => 'h4',
    'post-loop-excerpt'        => 20,
    'post-loop-use-content'    => false,
    'post-loop-category-link'  => true,
    'post-loop-readmore-title' => __('apollon._.readmore', OL_APOLLON_DICTIONARY),
    'post-loop-readmore-style' => 'default',
    'post-loop-readmore-icon'  => true,
    'post-loop-elements'       => ['thumbnail', 'title', 'categories', 'metas', 'excerpt'],
    'post-loop-metas'          => ['author', 'date'],
    'post-loop-cover-style'    => '',
    'post-loop-vertical-style' => 'secondary',

    'post-container'        => 'xlarge',
    'post-content'          => 'expand',
    'post-contents'         => ['thumbnail', 'title', 'categories', 'metas', 'content', 'tags'],
    'post-metas'            => ['author', 'date'],
    'post-avatar'           => true,
    'post-feature'          => false,
    'post-extend'           => true,
    'post-header'           => ['thumbnail', 'title'],
    'post-sidebar-position' => 'left',
    'post-sidebar-1'        => true,
    'post-sidebar-2'        => false,
    'post-sidebars'         => true,
];
