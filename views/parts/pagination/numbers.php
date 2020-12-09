<?php

/**
 * Pagination numbers part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}

global $wp_query;

// Useful vars
$opts      = $_pagination['options'];
$current   = max(1, get_query_var('paged'));
$pages     = max(1, $wp_query->max_num_pages);
$showitems = ($opts['range'] * 2) + 1;
$template  = '<li class="%s">%s%s%s</li>';

// Links
$links = [
    'first'    => sprintf(
        '%s%s',
        !$opts['icons'] ? '' : '<span uk-icon="chevron-double-left"></span> ',
        __('apollon.th.pagination.first', OL_APOLLON_DICTIONARY)
    ),
    'previous' => sprintf(
        '%s%s',
        !$opts['icons'] ? '' : '<span uk-pagination-previous></span> ',
        __('apollon.th.pagination.previous', OL_APOLLON_DICTIONARY)
    ),
    'next'     => sprintf(
        '%s%s',
        __('apollon.th.pagination.next', OL_APOLLON_DICTIONARY),
        !$opts['icons'] ? '' : ' <span%s uk-pagination-next></span>',
    ),
    'last'     => sprintf(
        '%s%s',
        __('apollon.th.pagination.last', OL_APOLLON_DICTIONARY),
        !$opts['icons'] ? '' : ' <span uk-icon="chevron-double-right"></span>'
    ),
];

// Separator
$opts['separator'] = $pages > $showitems - 1 ? $opts['separator'] : '';

// Items
$items = [];

// Title item
if (!empty($opts['title'])) {
    $items[] = sprintf(
        $template,
        'uk-disabled',
        '',
        '<span>'.str_replace(['%CURRENT%', '%TOTAL%'], [$current, $pages], $opts['title']).'</span>',
        ''
    );
}

// First item
if ($opts['first']) {
    $items[] = sprintf(
        $template,
        (1 < $current ? '' : 'uk-disabled').sprintf(
            '%s',
            !$opts['previous'] && 'expand' === $opts['position'] ? ' uk-margin-auto-right' : ''
        ),
        1 < $current ? '' : '<span>',
        1 < $current ? '<a href="'.get_pagenum_link(1).'">'.$links['first'].'</a>' : $links['first'],
        1 < $current ? '' : '</span>'
    );
}

// Previous item
if ($opts['previous']) {
    $items[] = sprintf(
        $template,
        (1 < $current ? '' : 'uk-disabled').sprintf(
            '%s',
            'expand' === $opts['position'] ? ' uk-margin-auto-right' : ''
        ),
        1 < $current ? '' : '<span>',
        1 < $current ? get_previous_posts_link($links['previous']) : $links['previous'],
        1 < $current ? '' : '</span>'
    );
}

// Get pages
if ($opts['nums']) {
    // Separator item
    if ($opts['separator'] && $current > $opts['range'] + 1) {
        $items[] = sprintf($template, '', '', '<a href="'.get_pagenum_link(1).'">1</a>', '');
        $items[] = '<li class="uk-disabled"><span>'.$opts['separator'].'</span></li>';
    }

    // Iterate on pages
    for ($i = 1; $i <= $pages; $i++) {
        $in_range = $i >= $current + $opts['range'] + 1 || $i <= $current - $opts['range'] - 1;

        // Item
        if (1 != $pages && (!$in_range || $pages <= $showitems)) {
            $items[] = sprintf(
                $template,
                $i === $current ? 'uk-active' : '',
                $i === $current ? '<span>' : '',
                $i === $current ? $i : '<a href="'.get_pagenum_link($i).'">'.$i.'</a>',
                $i === $current ? '</span>' : ''
            );
        }
    }

    // Separator item
    if ($opts['separator'] && $current < $pages - $opts['range']) {
        $items[] = '<li class="uk-disabled"><span>'.$opts['separator'].'</span></li>';
        $items[] = sprintf($template, '', '', '<a href="'.get_pagenum_link($pages).'">'.$pages.'</a>', '');
    }
}

// Next item
if ($opts['next']) {
    $items[] = sprintf(
        $template,
        ($current < $pages ? '' : 'uk-disabled').sprintf(
            '%s',
            'expand' === $opts['position'] ? ' uk-margin-auto-left' : ''
        ),
        $current < $pages ? '' : '<span>',
        $current < $pages ? get_next_posts_link($links['next']) : $links['next'],
        $current < $pages ? '' : '</span>'
    );
}

// Last item
if ($opts['last']) {
    $items[] = sprintf(
        $template,
        ($current < $pages ? '' : 'uk-disabled').sprintf(
            '%s',
            !$opts['next'] && 'expand' === $opts['position'] ? ' uk-margin-auto-left' : ''
        ),
        $current < $pages ? '' : '<span>',
        $current < $pages ? '<a href="'.get_pagenum_link($pages).'">'.$links['last'].'</a>' : $links['last'],
        $current < $pages ? '' : '</span>'
    );
}

// Check items
if (empty($items)) {
    return;
}


/**
 * Fires before displaying numbers pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_numbers_before', $_pagination);

echo sprintf(
    '<ul class="uk-pagination uk-margin-bottom uk-width-1-1 uk-flex-%s%s" uk-margin>',
    $_pagination['options']['position'],
    empty($_pagination['options']['css']) ? '' : ' '.$_pagination['options']['position']
);

foreach ($items as $item) {
    echo $item;
}

echo '</ul>';


/**
 * Fires after displaying numbers pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_numbers_after', $_pagination);

// Freedom
unset($current);
unset($items);
unset($links);
unset($opts);
unset($pages);
unset($showitems);
unset($template);
