<?php

/**
 * Apollon builder hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// INC FILES

// INCLUDED FILES
/*add_filter('ol.apollon.included_files', function ($files) {
    return array_merge($files, [
        'archive-video.php' => 'archives'.S.'video.php',
        'archive-video.php' => 'archives'.S.'default.php',
        'single-video.php'  => 'pages'.S.'single-post.php',
    ]);
});
add_filter('ol.apollon.archives_files', function ($files) {
    $files[] = 'video';
    return $files;
});/**

// PARTS BUILDERS
add_filter('ol.apollon.menu_account_before_check', function ($opts) {
    apollonGetPart('searchform.php', [
        'template' => 'modal',
        'args'     => [
            'navbar'     => true,
            'searchicon' => true,
        ],
    ]);
});/**/


// BUILDER

/**
 * Build attributes.
 *
 * @param  array   $attrs
 * @param  string  $separator
 *
 * @return string
 */
add_filter('ol.apollon.build_attrs', function ($attrs, $separator = ' ') {
    // Check attrs
    if (empty($attrs)) {
        return [];
    }

    $attributes = [];

    // Iterate on attributes
    foreach ($attrs as $attribute => $vals) {
        $attributes[$attribute] = '';
        $_attr = '';

        if (empty($vals)) {
            continue;
        }

        foreach ($vals as $key => $value) {
            $_attr .= (empty($_attr) ? '' : $separator).$key;
            $_attr .= false === $value ? '' : '="'.$value.'"';
        }

        $attributes[$attribute] = $_attr;
    }

    return $attributes;
});

/**
 * Build categories.
 *
 * @param  array   $categories
 * @param  boolean $use_link
 * @param  string  $separator
 *
 * @return string
 */
add_filter('ol.apollon.build_categories', function ($categories, $use_link = true, $separator = ', ') {
    if (empty($categories)) {
        return '';
    }

    $cats = '';

    foreach ($categories as $cat) {
        $cats .= (!empty($cats) ? $separator : '');
        $cats .= !$use_link ? strip_tags($cat->cat_name) : sprintf(
            __('<a href="%s">%s</a>'),
            get_category_link($cat),
            strip_tags($cat->cat_name)
        );
    }

    return $cats;
}, 10, 3);

/**
 * Build separator.
 *
 * @param  string  $separator
 * @param  string  $template
 *
 * @return string
 */
add_filter('ol.apollon.build_separator', function ($separator, $template) {
    return '<hr class="uk-divider-icon uk-divider-fill"/>';
}, 10, 2);
