<?php

/**
 * Pagination function
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build pagination items.
 *
 * @return array
 */
add_filter('ol.apollon.pagination_build_items', function ($items) {
    global $wp_query;


    /**
     * Override pagination args.
     *
     * @return array
     */
    $args = apply_filters('ol.apollon.pagination_build_items_args', [
        'expand'    => true,
        'first'     => true,
        'icons'     => true,
        'last'      => true,
        'max_range' => 3,
        'next'      => true,
        'nums'      => true,
        'previous'  => true,
        'separator' => '...',
        'title'     => true,
    ]);


    /**
     * Override pagination labels.
     *
     * @return array
     */
    $labels = apply_filters('ol.apollon.pagination_build_items_labels', [
        'title'    => __('Page %d of %d', OL_APOLLON_DICTIONARY),
        'first'    => __('First', OL_APOLLON_DICTIONARY),
        'previous' => __('Previous', OL_APOLLON_DICTIONARY),
        'next'     => __('Next', OL_APOLLON_DICTIONARY),
        'last'     => __('Last', OL_APOLLON_DICTIONARY),
    ]);


    // Links
    $links = [
        'first'    => !$args['icons'] ? '' : sprintf(
            '<span uk-icon="chevron-double-left"></span> %s',
            $labels['first']
        ),
        'previous' => !$args['icons'] ? '' : sprintf(
            '<span%s uk-pagination-previous></span> %s',
            $args['expand'] ? ' class="uk-margin-auto-right"' : '',
            $labels['previous']
        ),
        'next'     => !$args['icons'] ? '' : sprintf(
            '%s <span%s uk-pagination-next></span>',
            $labels['next'],
            $args['expand'] ? ' class="uk-margin-auto-left"' : ''
        ),
        'last'     => !$args['icons'] ? '' : sprintf(
            '%s <span uk-icon="chevron-double-right"></span>',
            $labels['last']
        ),
    ];

    // Configurations
    $current   = max(1, get_query_var('paged'));
    $pages     = max(1, $wp_query->max_num_pages);
    $showitems = ($args['max_range'] * 2) + 1;
    $template  = '<li class="%s">%s%s%s</li>';

    // Separator
    $args['separator'] = $pages > $showitems - 1 ? $args['separator'] : '';


    // Items
    $items = [];

    // Title item
    if ($args['title']) {
        $items[] = sprintf($template, 'uk-disabled', '', sprintf($labels['title'], $current, $pages), '');
    }

    // First item
    if ($args['first']) {
        $items[] = sprintf(
            $template,
            1 < $current ? '' : 'uk-disabled',
            1 < $current ? '' : '<span>',
            1 < $current ? '<a href="'.get_pagenum_link(1).'">'.$links['first'].'</a>' : $links['first'],
            1 < $current ? '' : '</span>'
        );
    }

    // Previous item
    if ($args['previous']) {
        $items[] = sprintf(
            $template,
            (1 < $current ? '' : 'uk-disabled').($args['expand'] ? ' uk-margin-auto-right' : ''),
            1 < $current ? '' : '<span>',
            1 < $current ? get_previous_posts_link($links['previous']) : $links['previous'],
            1 < $current ? '' : '</span>'
        );
    }

    // Get pages
    if ($args['nums']) {
        // Separator item
        if ($args['separator'] && $current > $args['max_range'] + 1) {
            $items[] = sprintf($template, '', '', '<a href="'.get_pagenum_link(1).'">1</a>', '');
            $items[] = '<li class="uk-disabled"><span>'.$args['separator'].'</span></li>';
        }

        // Iterate on pages
        for ($i = 1; $i <= $pages; $i++) {
            $in_range = $i >= $current + $args['max_range'] + 1 || $i <= $current - $args['max_range'] - 1;

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
        if ($args['separator'] && $current < $pages - $args['max_range']) {
            $items[] = '<li class="uk-disabled"><span>'.$args['separator'].'</span></li>';
            $items[] = sprintf($template, '', '', '<a href="'.get_pagenum_link($pages).'">'.$pages.'</a>', '');
        }
    }

    // Next item
    if ($args['next']) {
        $items[] = sprintf(
            $template,
            ($current < $pages ? '' : 'uk-disabled').($args['expand'] ? ' uk-margin-auto-left' : ''),
            $current < $pages ? '' : '<span>',
            $current < $pages ? get_next_posts_link($links['next']) : $links['next'],
            $current < $pages ? '' : '</span>'
        );
    }

    // Last item
    if ($args['last']) {
        $items[] = sprintf(
            $template,
            $current < $pages ? '' : 'uk-disabled',
            $current < $pages ? '' : '<span>',
            $current < $pages ? '<a href="'.get_pagenum_link($pages).'">'.$links['last'].'</a>' : $links['last'],
            $current < $pages ? '' : '</span>'
        );
    }

    return $items;
});
