/**
 * Update Customizer settings live.
 *
 * @version 1.0.0
 */

(function($){
    var $head = $('head'),
        $body = $('body');

    wp.customize('color_primary', function(_value) {
        _value.bind(function(_newvalue) {
            var $child = $('style.apollon-gt-color_primary');

            if (_newvalue) {
                var style = '<style class="apollon-gt-color_primary">.uk-text-primary,.uk-link,a{color:'+_newvalue+'!important}</style>';

                if ($child.length) {
                    $child.replaceWith(style);
                } else {
                    $head.append(style);
                }
            } else {
                $child.remove();
            }
        });
    });

    /**
     * GENERAL
     */

/*
    css_location
    og_enable
    og_twitter
    og_facebook
    og_facebookapp
    color_primary
    color_neutral
    color_background
    color_red
    color_yellow
    color_green
    color_blue
    color_teal
    color_purple
    color_darkneutral_dark
    color_darkneutral_light
    color_midneutral_dark
    color_midneutral_light
    color_lightneutral_dark
    color_lightneutral_light
    color_red_dark
    color_red_light
    color_yellow_dark
    color_yellow_light
    color_green_dark
    color_green_light
    color_blue_dark
    color_blue_light
    color_teal_dark
    color_teal_light
    color_purple_dark
    color_purple_light
    grid_container
    grid_gap
    grid_divider
    grid_matchheight
    logos_retina
    logos_maxwidth
    logos_maxheight
    typo_mainfont
    typo_secondaryfont
    typo_alternativefont
    typo_bodysize
    typo_lineheight
    typo_smallsize
    typo_listsize
    typo_listlineheight
    typo_headingfont
    typo_h1size
    typo_h2size
    typo_h3size
    typo_h4size
    typo_h5size
    typo_h6size
*/

    /**
     * FEATURES
     */

/*
    searchform_enable
    searchform_posttypes
    searchform_titleonly
    searchform_postsperpage
    searchform_livesearch
    searchform_headerlayout
    searchform_pagelayout
    searchform_posttypesdropdown
    searchform_submitbutton
    sidebar_enable
    sidebar_1_mobile
    sidebar_1_sticky
    sidebar_1_size
    sidebar_1_background
    sidebar_2_mobile
    sidebar_2_sticky
    sidebar_2_size
    sidebar_2_background
    sidebar_default_display
    sidebar_default_order
    sidebar_blog_display
    sidebar_blog_order
    sidebar_blog_content
    sidebar_archive_display
    sidebar_archive_order
    sidebar_archive_content
    sidebar_search_display
    sidebar_search_order
    sidebar_search_content
    comments_enable
    comments_avatar
    comments_website
    comments_htmltags
    comments_header
    comments_listlayout
    comments_formlayout
    comments_formstacked
    comments_highlight
    comments_formposition
    comments_navsposition
    backtotop_enable
    backtotop_label
    backtotop_icon
    backtotop_mobile
    backtotop_bottom
    backtotop_position
    backtotop_width
    backtotop_fontsize
    backtotop_borderradius
    pagination_enable
    pagination_label
    pagination_previous
    pagination_next
    pagination_range
    pagination_template
    pagination_position
    pagination_infinitelabel
    navs_enable
    ads_enable
    adblocker_enable
*/

    /**
     * HEADER
     */

    wp.customize('topnav_customtext', function(_value) {
        _value.bind(function(_newvalue) {
            var $child = $('.topnav-customtext');

            if (_newvalue && $child.length) {
                $child.html(_newvalue);
            }
        });
    });

    wp.customize('mainnav_customtext', function(_value) {
        _value.bind(function(_newvalue) {
            var $child = $('.mainnav-customtext');

            if (_newvalue && $child.length) {
                $child.html(_newvalue);
            }
        });
    });

    wp.customize('subnav_customtext', function(_value) {
        _value.bind(function(_newvalue) {
            var $child = $('.subnav-customtext');

            if (_newvalue && $child.length) {
                $child.html(_newvalue);
            }
        });
    });

/*
    topnav_enable
    topnav_customtext
    topnav_order
    topnav_mobile
    topnav_sticky
    topnav_template
    topnav_fullwidth
    topnav_background
    topnav_fontsize
    topnav_lineheight
    topnav_padding
    mainnav_enable
    mainnav_customtext
    mainnav_order
    mainnav_mobile
    mainnav_sticky
    mainnav_template
    mainnav_fullwidth
    mainnav_background
    mainnav_fontsize
    mainnav_lineheight
    mainnav_padding
    subnav_enable
    subnav_customtext
    subnav_order
    subnav_mobile
    subnav_sticky
    subnav_template
    subnav_fullwidth
    subnav_background
    subnav_fontsize
    subnav_lineheight
    subnav_padding
    nav_menulabel
    nav_shadow
    nav_dropdownclick
    nav_dropdownwidth
*/

    /**
     * LAYOUTS
     */

/*
    layout_posttypes
    layout_container
    layout_size
    layoutposts_posttypes
    layoutposts_container
    layoutposts_size
    layoutposts_template
    layoutpost_container
    layoutpost_size
    layoutmedia_container
    layoutmedia_size
    layoutpage_container
    layoutpage_size
    layoutsearch_posttypes
    layoutsearch_container
    layoutsearch_size
    layoutsearch_template
    layout404_container
    layout404_size
    layout'.$type.'_container
    layout'.$type.'_size
*/

    /**
     * FOOTER
     */

/*
    topsection_enable
    topsection_columns
    topsection_fullwidth
    topsection_background
    topsection_fontsize
    topsection_lineheight
    topsection_padding
    mainsection_enable
    mainsection_columns
    mainsection_fullwidth
    mainsection_background
    mainsection_fontsize
    mainsection_lineheight
    mainsection_padding
    subsection_enable
    subsection_columns
    subsection_fullwidth
    subsection_background
    subsection_fontsize
    subsection_lineheight
    subsection_padding
*/


    /**
     * WordPress Core
     */

    // Site title
    wp.customize('blogname', function(_val) {
        _val.bind(function(_new_val) {
            $('.site-logo-text').text(_new_val);
        });
    });

    // Site description
    wp.customize('blogdescription', function(_val) {
        _val.bind(function(_new_val) {
            $('#site-description h2').text(_new_val);
        });
    });


})(jQuery);
