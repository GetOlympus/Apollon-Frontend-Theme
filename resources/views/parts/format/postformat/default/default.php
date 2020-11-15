<?php

/**
 * Format post default display subpart.
 * 
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format_item)) {
    die('You are not authorized to directly access to this page');
}

// HTML builder
$_format_item['html'] = [
    'attrs' => sprintf(
        __('href="%s" title="%s" class="%s"%s', OL_APOLLON_LANGUAGESPATH),
        $_format_item['link'],
        $_format_item['esc_title'],
        sprintf(
            'ap-f uk-flex-middle uk-margin-remove-left uk-link-heading %s',
            empty($_format_item['images']) ? '' : 'uk-grid'
        ),
        empty($_format_item['images']) ? '' : ' uk-grid'
    ),
    'author' => sprintf(
        __('%s %s', OL_APOLLON_LANGUAGESPATH),
        $_format_item['labels']['by'],
        $_format_item['author']['name']
    ),
    'categories' => empty($_format_item['categories']) ? '' : sprintf(
        __('<span class="%s">%s</span>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-primary uk-text-uppercase uk-text-small',
        $_format_item['categories']
    ),
    'date' => sprintf(
        __('<time datetime="%s">%s %s</time>', OL_APOLLON_LANGUAGESPATH),
        $_format_item['dates']['c'],
        $_format_item['labels']['on'],
        $_format_item['dates']['long']
    ),
    'excerpt' => sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-meta uk-text-small uk-margin-remove-vertical',
        $_format_item['excerpt']
    ),
    'thumbnail' => empty($_format_item['images']) ? '' : sprintf(
        __('<figure class="%s">%s</figure>', OL_APOLLON_LANGUAGESPATH),
        'uk-width-1-1@s uk-width-1-2@m uk-width-1-4@l uk-flex-first uk-padding-small',
        $_format_item['images']['thumbnail']
    ),
    'title' => sprintf(
        __('<h2 class="%s">%s</h2>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-lead uk-margin-remove-vertical',
        $_format_item['title']
    ),
    'opentag'  => empty($_format_item['images']) ? '' : '<div class="uk-width-1-1@s uk-width-expand@m uk-padding-small">',
    'closetag' => empty($_format_item['images']) ? '' : '</div>',
];

$_format_item['html']['meta'] = sprintf(
    __('<p class="%s">%s, %s</p>', OL_APOLLON_LANGUAGESPATH),
    'uk-text-lead uk-text-small uk-margin-remove-vertical',
    $_format_item['html']['author'],
    $_format_item['html']['date']
);


/**
 * Override format post default default html.
 *
 * @param  array   $html
 * @param  array   $_format_item
 *
 * @return array
 */
$_format_item['html'] = apply_filters('ol.apollon.format_post_default_default_html', $_format_item['html'], $_format_item);


/**
 * Override format post default default order.
 *
 * @param  array   $order
 *
 * @return array
 */
$_format_item['html']['_order'] = apply_filters('ol.apollon.format_post_default_default_order', [
    $_format_item['html']['categories'],
    $_format_item['html']['title'],
    $_format_item['html']['excerpt'],
    $_format_item['html']['meta'],
]);

$_format_item['html']['order'] = implode('', $_format_item['html']['_order']);


/**
 * Override format post default default thumbnail.
 *
 * @param  string  $thumbnail
 *
 * @return string
 */
$_format_item['html']['thumbnail'] = apply_filters('ol.apollon.format_post_default_default_thumbnail',
    $_format_item['html']['thumbnail']
);


/**
 * Override format post default default content.
 *
 * @param  string  $html
 * @param  array   $contents
 *
 * @return string
 */
echo apply_filters('ol.apollon.format_post_default_default_content', sprintf(
    '<a %s>%s%s%s%s</a>',
    $_format_item['html']['attrs'],
    $_format_item['html']['opentag'],
    $_format_item['html']['order'],
    $_format_item['html']['closetag'],
    $_format_item['html']['thumbnail']
), $_format_item['html']);


/**
 * Build separator.
 *
 * @param  string  $separator
 * @param  string  $template
 *
 * @return string
 */
echo apply_filters('ol.apollon.build_separator', '', 'default');
