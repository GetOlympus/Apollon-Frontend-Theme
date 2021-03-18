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

    // Foundations

    'global-font-family'       => $mainfonts,
    'global-font-size'         => '16px',
    'global-line-height'       => '1.5',
    'global-small-font-size'   => '.875rem',
    'global-medium-font-size'  => '1.25rem',
    'global-large-font-size'   => '1.5rem',
    'global-xlarge-font-size'  => '2rem',
    'global-2xlarge-font-size' => '2.625rem',

    'heading-font-family'    => $headingfonts,
    'heading-font-weight'    => 600,
    'heading-font-style'     => 'inherit',
    'heading-letter-spacing' => 'normal',
    'heading-text-transform' => 'uppercase',

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

    // Buttons

    'global-border'        => '#e5e5e5',
    'global-border-radius' => 0,
    'global-border-width'  => '1px',

    'global-small-box-shadow'  => '0 2px 8px rgba(0,0,0,0.08)',
    'global-medium-box-shadow' => '0 5px 15px rgba(0,0,0,0.08)',
    'global-large-box-shadow'  => '0 14px 25px rgba(0,0,0,0.16)',
    'global-xlarge-box-shadow' => '0 28px 50px rgba(0,0,0,0.16)',

    'global-control-height'       => '40px',
    'global-control-small-height' => '30px',
    'global-control-large-height' => '55px',

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

    'global-z-index' => 1000,

    // Responsive

    'breakpoint-small'  => '640px',
    'breakpoint-medium' => '960px',
    'breakpoint-large'  => '1200px',
    'breakpoint-xlarge' => '1600px',


    // COMPONENTS

    // Core

    // Skeleton

    'divider-icon' => false,

    // Navs

    'navbar-nav-item-height'    => '80px',
    'navbar-nav-item-font-size' => '16px',

    // Elements

    'dropdown-background' => 'muted',
    'dropdown-shadow'     => 'small',


    // GENERAL

    'css-location' => 'css',

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

    'sidebar-enable'          => false,
    //'sidebar1-enable'        => true,
    'sidebar1-mobile'        => false,
    'sidebar1-sticky'        => false,
    'sidebar1-size'          => '1-5',
    'sidebar1-background'    => 'transparent',
    //'sidebar2-enable'        => true,
    'sidebar2-mobile'        => false,
    'sidebar2-sticky'        => false,
    'sidebar2-size'          => '1-5',
    'sidebar2-background'    => 'transparent',

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

    'breadcrumb-enable' => false,
    'navs-enable'       => false,
    'ads-enable'        => false,
    'adblocker-enable'  => false,


    // LAYOUT

    // Website

    'website-border-color' => 'transparent',
    'website-border-mode'  => 'full',
    'website-border-width' => 0,

    'website-grid-container'    => 'large',
    'website-grid-column-gap'   => 'default',
    'website-grid-row-gap'      => 'default',
    'website-grid-divider'      => false,
    'website-grid-match-height' => false,

    'website-nav-menu'          => __('apollon.cz.layout.configurations.nav-menu.placeholder', OL_APOLLON_DICTIONARY),
    'website-nav-shadow'        => 'none',
    'website-nav-sticky'        => 'static',
    'website-dropdown-click'    => false,
    'website-dropdown-position' => 'default',

    'nav-top-enable'      => false,
    'nav-top-custom-text' => '',
    'nav-top-content-1'   => '',
    'nav-top-content-2'   => '',
    'nav-top-content-3'   => '',
    'nav-top-mobile'      => false,
    'nav-top-template'    => 'left',
    'nav-top-full-width'  => false,
    'nav-top-color'       => 'dark',
    'nav-top-background'  => 'secondary',
    'nav-top-font-size'   => '12px',
    'nav-top-height'      => '40px',
    'nav-top-padding'     => 'default',

    'nav-main-enable'      => true,
    'nav-main-custom-text' => '',
    'nav-main-content-1'   => 'logo',
    'nav-main-content-2'   => 'menu',
    'nav-main-content-3'   => 'search',
    'nav-main-mobile'      => true,
    'nav-main-template'    => 'left',
    'nav-main-full-width'  => false,
    'nav-main-background'  => 'none',
    'nav-main-font-size'   => '16px',
    'nav-main-height'      => '80px',
    'nav-main-padding'     => 'default',

    'nav-sub-enable'      => true,
    'nav-sub-custom-text' => '',
    'nav-sub-content-1'   => '',
    'nav-sub-content-2'   => 'menu',
    'nav-sub-content-3'   => '',
    'nav-sub-mobile'      => false,
    'nav-sub-template'    => 'left',
    'nav-sub-full-width'  => false,
    'nav-sub-background'  => 'none',
    'nav-sub-font-size'   => '12px',
    'nav-sub-height'      => '40px',
    'nav-sub-padding'     => 'default',

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
    'section-sub-background'  => 'secondary',
    'section-sub-font-size'   => 14,
    'section-sub-line-height' => 20,
    'section-sub-padding'     => 'default',

    'homepage-posttypes'  => ['post'],
    'homepage-container'  => 'xlarge',
    'homepage-content'    => 'expand',
    'homepage-gridgap'    => 'small',
    'homepage-columns'    => 1,
    'homepage-sidebarpos' => 'left',
    'homepage-sidebar1'   => true,
    'homepage-sidebar2'   => false,
    'homepage-sidebars'   => true,

    // Loops

    'archives-posttypes'  => ['post'],
    'archives-container'  => 'xlarge',
    'archives-content'    => 'expand',
    'archives-gridgap'    => 'small',
    'archives-columns'    => 1,
    'archives-sidebarpos' => 'left',
    'archives-sidebar1'   => true,
    'archives-sidebar2'   => false,
    'archives-sidebars'   => true,

    'search-posttypes'  => ['post'],
    'search-container'  => 'xlarge',
    'search-content'    => 'expand',
    'search-gridgap'    => 'small',
    'search-columns'    => 1,
    'search-sidebarpos' => 'left',
    'search-sidebar1'   => true,
    'search-sidebar2'   => false,
    'search-sidebars'   => true,

    // Pages

    'page-container'  => 'xlarge',
    'page-content'    => 'expand',
    'page-feature'    => false,
    'page-extend'     => true,
    'page-header'     => ['thumbnail', 'title'],
    'page-elements'   => ['thumbnail', 'title', 'metas'],
    'page-metas'      => ['author', 'date'],
    'page-sidebarpos' => 'left',
    'page-sidebar1'   => true,
    'page-sidebar2'   => false,
    'page-sidebars'   => true,

    '404-container' => 'xlarge',
    '404-content'   => 'expand',

    'attachment-container' => 'xlarge',
    'attachment-content'   => 'expand',

    // Cpts

    'post-loop-template'      => 'default',
    'post-loop-coverstyle'    => '',
    'post-loop-verticalstyle' => 'secondary',
    'post-loop-thumbnail'     => 'thumbnail',
    'post-loop-titletag'      => 'h2',
    'post-loop-titledisplay'  => 'h4',
    'post-loop-excerpt'       => 20,
    'post-loop-usecontent'    => false,
    'post-loop-categorylink'  => true,
    'post-loop-readmoretitle' => __('apollon._.readmore', OL_APOLLON_DICTIONARY),
    'post-loop-readmorestyle' => 'default',
    'post-loop-readmoreicon'  => true,
    'post-loop-elements'      => ['thumbnail', 'title', 'categories', 'metas', 'excerpt'],
    'post-loop-metas'         => ['author', 'date'],

    'post-container'  => 'xlarge',
    'post-content'    => 'expand',
    'post-contents'   => ['thumbnail', 'title', 'categories', 'metas', 'content', 'tags'],
    'post-metas'      => ['author', 'date'],
    'post-avatar'     => true,
    'post-feature'    => false,
    'post-extend'     => true,
    'post-header'     => ['thumbnail', 'title'],
    'post-sidebarpos' => 'left',
    'post-sidebar1'   => true,
    'post-sidebar2'   => false,
    'post-sidebars'   => true,
];
