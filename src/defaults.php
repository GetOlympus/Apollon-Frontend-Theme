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

$secondaryfonts  = '"SFMono-Medium", "SF Mono", "Segoe UI Mono", "Roboto Mono", "Ubuntu Mono",';
$secondaryfonts .= ' Menlo, Consolas, Courier, monospace';

return [
    // WORDPRESS

    'wp_postsperpage' => $posts_per_page,
    'wp_posttypes'    => $post_types,
    'wp_showonfront'  => $show_on_front,


    // GENERAL

    'css_location' => 'css',

    'og_enable'      => false,
    'og_twitter'     => '',
    'og_facebook'    => '',
    'og_facebookapp' => '',

    'color_primary'    => '#45e581',
    'color_secondary'  => '#e545a9',
    'color_muted'      => '#fafafa',
    'color_neutral'    => '#172b4d',
    'color_background' => '#ffffff',
    'color_red'        => '#ff5630',
    'color_yellow'     => '#ffab00',
    'color_green'      => '#36b37e',
    'color_blue'       => '#0065ff',
    'color_teal'       => '#00b8d9',
    'color_purple'     => '#6554c0',
    'color_darkneutral_dark'   => '#091e42',
    'color_darkneutral_light'  => '#42526e',
    'color_midneutral_dark'    => '#505f79',
    'color_midneutral_light'   => '#8993a4',
    'color_lightneutral_dark'  => '#c1c7d0',
    'color_lightneutral_light' => '#f4f5f7',
    'color_red_dark'     => '#bf2600',
    'color_red_light'    => '#ffebe6',
    'color_yellow_dark'  => '#ff8b00',
    'color_yellow_light' => '#fffae6',
    'color_green_dark'   => '#006644',
    'color_green_light'  => '#e3fcef',
    'color_blue_dark'    => '#0747a6',
    'color_blue_light'   => '#deebff',
    'color_teal_dark'    => '#008da6',
    'color_teal_light'   => '#e6fcff',
    'color_purple_dark'  => '#403294',
    'color_purple_light' => '#eae6ff',

    'grid_container'   => 'large',
    'grid_columngap'   => 'default',
    'grid_rowgap'      => 'default',
    'grid_divider'     => false,
    'grid_matchheight' => false,

    'logos_default'   => '',
    'logos_retina'    => '',
    'logos_maxwidth'  => 160,
    'logos_maxheight' => 0,
    'logos_slogan'    => false,

    'typo_mainfont'        => $mainfonts,
    'typo_secondaryfont'   => $secondaryfonts,
    'typo_alternativefont' => 'sans-serif',
    'typo_bodysize'        => 14,
    'typo_lineheight'      => 20,
    'typo_smallsize'       => 11,
    'typo_listsize'        => 14,
    'typo_listlineheight'  => 20,
    'typo_headingfont'     => 'main',
    'typo_h1size'          => 29,
    'typo_h2size'          => 24,
    'typo_h3size'          => 20,
    'typo_h4size'          => 16,
    'typo_h5size'          => 14,
    'typo_h6size'          => 12,


    // FEATURES

    'searchform_enable'             => false,
    'searchform_posttypes'          => false,
    'searchform_titleonly'          => false,
    'searchform_postsperpage'       => 'post',
    'searchform_livesearch'         => false,
    'searchform_headerlayout'       => 'default',
    'searchform_dropbar'            => 'slide',
    'searchform_pagelayout'         => 'default',
    'searchform_posttypesdropdown'  => false,
    'searchform_submitbutton'       => false,

    'sidebar_enable'          => false,
    //'sidebar_1_enable'        => true,
    'sidebar_1_mobile'        => false,
    'sidebar_1_sticky'        => false,
    'sidebar_1_size'          => '1-5',
    'sidebar_1_background'    => 'transparent',
    //'sidebar_2_enable'        => true,
    'sidebar_2_mobile'        => false,
    'sidebar_2_sticky'        => false,
    'sidebar_2_size'          => '1-5',
    'sidebar_2_background'    => 'transparent',

    'comments_enable'       => false,
    'comments_avatar'       => true,
    'comments_website'      => true,
    'comments_htmltags'     => false,
    'comments_header'       => true,
    'comments_listlayout'   => 'default',
    'comments_formlayout'   => 'default',
    'comments_formstacked'  => false,
    'comments_labels'       => true,
    'comments_highlight'    => false,
    'comments_formposition' => 'bottom',
    'comments_navsposition' => 'bottom',

    'backtotop_enable'   => false,
    'backtotop_label'    => '',
    'backtotop_icon'     => true,
    'backtotop_mobile'   => true,
    'backtotop_margin'   => 'small',
    'backtotop_position' => 'right',
    'backtotop_style'    => 'secondary',

    'pagination_enable'        => false,
    'pagination_first'         => false,
    'pagination_previous'      => true,
    'pagination_next'          => true,
    'pagination_last'          => false,
    'pagination_icons'         => true,
    'pagination_range'         => 4,
    'pagination_separator'     => '...',
    'pagination_nums'          => true,
    'pagination_template'      => 'default',
    'pagination_position'      => 'center',
    'pagination_title'         => __('apollon.ct.features.pagination.layout.title.placeholder', OL_APOLLON_DICTIONARY),
    'pagination_infinitelabel' => false,

    'breadcrumb_enable' => false,

    'navs_enable' => false,

    'ads_enable' => false,

    'adblocker_enable' => false,


    // HEADER
    'topnav_enable'     => false,
    'topnav_customtext' => '',
    'topnav_content_1'  => '',
    'topnav_content_2'  => '',
    'topnav_content_3'  => '',
    'topnav_mobile'     => false,
    'topnav_template'   => 'left',
    'topnav_fullwidth'  => false,
    'topnav_background' => 'secondary',
    'topnav_fontsize'   => 14,
    'topnav_lineheight' => 20,
    'topnav_padding'    => 20,

    'mainnav_enable'     => true,
    'mainnav_customtext' => '',
    'mainnav_content_1'  => 'logo',
    'mainnav_content_2'  => 'menu',
    'mainnav_content_3'  => 'search',
    'mainnav_mobile'     => true,
    'mainnav_template'   => 'left',
    'mainnav_fullwidth'  => false,
    'mainnav_background' => 'none',
    'mainnav_fontsize'   => 14,
    'mainnav_lineheight' => 20,
    'mainnav_padding'    => 20,

    'subnav_enable'     => true,
    'subnav_customtext' => '',
    'subnav_content_1'  => '',
    'subnav_content_2'  => 'menu',
    'subnav_content_3'  => '',
    'subnav_mobile'     => false,
    'subnav_template'   => 'left',
    'subnav_fullwidth'  => false,
    'subnav_background' => 'none',
    'subnav_fontsize'   => 14,
    'subnav_lineheight' => 20,
    'subnav_padding'    => 20,

    'nav_menulabel'     => '',
    'nav_shadow'        => 'none',
    'nav_sticky'        => 'none',

    'dropdown_click'    => false,
    'dropdown_position' => 'default',
    'dropdown_dropbar'  => 'none',


    // LAYOUTS
    'layout_default_posttypes'     => ['post'],
    'layout_default_container'     => 'expand',
    'layout_default_content'       => 'expand',
    'layout_default_columns'       => 1,
    'layout_default_gridgap'       => 'small',
    'layout_default_avatar'        => true,
    'layout_default_feature'       => false,
    'layout_default_extend'        => true,
    'layout_default_header'        => ['thumbnail', 'title'],
    'layout_default_elements'      => ['thumbnail', 'title', 'categories', 'metas', 'excerpt'],
    'layout_default_contents'      => ['thumbnail', 'title', 'categories', 'metas', 'content', 'tags', 'comments'],
    'layout_default_metas'         => ['author', 'date'],
    'layout_default_template'      => 'default',
    'layout_default_thumbnail'     => 'thumbnail',
    'layout_default_titletag'      => 'h2',
    'layout_default_titledisplay'  => 'h4',
    'layout_default_excerpt'       => 20,
    'layout_default_usecontent'    => false,
    'layout_default_categorylink'  => true,
    'layout_default_readmoretitle' => __('apollon._.cpt.readmore', OL_APOLLON_DICTIONARY),
    'layout_default_readmorestyle' => 'default',
    'layout_default_readmoreicon'  => true,
    'layout_default_coverstyle'    => '',
    'layout_default_coverpos'      => 'bottom',

    'layout_default_sidebarpos'    => 'left',
    'layout_default_sidebar1'      => true,
    'layout_default_sidebar2'      => false,
    'layout_default_sidebars'      => false,


    // FOOTER
    'topsection_enable'     => false,
    'topsection_content_1'  => '',
    'topsection_content_2'  => '',
    'topsection_content_3'  => '',
    'topsection_content_4'  => '',
    'topsection_size_1'     => '1-4',
    'topsection_size_2'     => '1-4',
    'topsection_size_3'     => '1-4',
    'topsection_size_4'     => '1-4',
    'topsection_fullwidth'  => true,
    'topsection_background' => '#ffffff',
    'topsection_fontsize'   => 14,
    'topsection_lineheight' => 20,
    'topsection_padding'    => 'default',

    'mainsection_enable'     => false,
    'mainsection_content_1'  => '',
    'mainsection_content_2'  => '',
    'mainsection_content_3'  => '',
    'mainsection_content_4'  => '',
    'mainsection_size_1'     => '1-4',
    'mainsection_size_2'     => '1-4',
    'mainsection_size_3'     => '1-4',
    'mainsection_size_4'     => '1-4',
    'mainsection_fullwidth'  => true,
    'mainsection_background' => '#ffffff',
    'mainsection_fontsize'   => 14,
    'mainsection_lineheight' => 20,
    'mainsection_padding'    => 'default',

    'subsection_enable'     => true,
    'subsection_content_1'  => 'logo',
    'subsection_content_2'  => 'sidebar',
    'subsection_content_3'  => '',
    'subsection_content_4'  => '',
    'subsection_size_1'     => '1-4',
    'subsection_size_2'     => '1-4',
    'subsection_size_3'     => '1-4',
    'subsection_size_4'     => '1-4',
    'subsection_fullwidth'  => true,
    'subsection_background' => '#ffffff',
    'subsection_fontsize'   => 14,
    'subsection_lineheight' => 20,
    'subsection_padding'    => 'default',
];
