<?php

/**
 * Pages options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$pages = [];

// PAGES
$pages[$slug.'-pages'] = array_merge($this->contents['section_title'], [
    'title'    => __('apollon.cz.layout.pages.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
]);

// COMPLEX PAGES
foreach (['frontpage', 'page'] as $p) {
    $pages[$slug.'-pages-'.$p] = [
        'title'    => __('apollon.cz.layout.'.$p.'.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [],
    ];

    if ('frontpage' === $p) {
        $pages[$slug.'-pages-'.$p]['description'] = __('apollon.cz.layout.'.$p.'.desc', OL_APOLLON_DICTIONARY);
    }

    $pages[$slug.'-pages-'.$p]['controls'][$p.'-use-default'] = [
        'label'       => __('apollon.cz.layout.default.use-default.title', OL_APOLLON_DICTIONARY),
        'description' => sprintf(
            __('apollon.cz.layout.default.use-default.desc', OL_APOLLON_DICTIONARY),
            admin_url('/customize.php?autofocus[section]=lt-website-configs')
        ),
        'priority'    => ++$priority,
        'type'        => 'checkbox',
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-container'] = [
        'label'    => __('apollon.cz.layout.default.grid-container.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-content'] = [
        'label'    => __('apollon.cz.layout.default.grid-content.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
            '2-5'    => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
            '3-5'    => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
            '2-3'    => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
            '3-4'    => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
            '4-5'    => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
            '5-6'    => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
            '1-1'    => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-feature'] = [
        'label'    => __('apollon.cz.layout.default.feature.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-expand'] = [
        'label'    => __('apollon.cz.layout.default.expand.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-header'] = [
        'label'    => __('apollon.cz.layout.default.header.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'apollon-multicheck',
        'choices'  => [
            'thumbnail'   => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
            'overlay'     => __('apollon._.overlay', OL_APOLLON_DICTIONARY),
            'title'       => __('apollon._.title', OL_APOLLON_DICTIONARY),
            'comments'    => __('apollon._.comments', OL_APOLLON_DICTIONARY),
            'readingtime' => __('apollon._.readingtime', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-elements'] = [
        'label'       => __('apollon.cz.layout.default.elements.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'type'        => 'apollon-multicheck',
        'input_attrs' => [
            'sortable' => true,
        ],
        'choices'     => [
            'thumbnail'  => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
            'title'      => __('apollon._.title', OL_APOLLON_DICTIONARY),
            'metas'      => __('apollon._.metas', OL_APOLLON_DICTIONARY),
            'content'    => __('apollon._.content', OL_APOLLON_DICTIONARY),
            'social'     => __('apollon._.social', OL_APOLLON_DICTIONARY),
            'comments'   => __('apollon._.comments', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-metas'] = [
        'label'       => __('apollon.cz.layout.default.metas.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'type'        => 'apollon-multicheck',
        'input_attrs' => [
            'sortable' => true,
        ],
        'choices'     => [
            'author'      => __('apollon._.author', OL_APOLLON_DICTIONARY),
            'date'        => __('apollon._.date', OL_APOLLON_DICTIONARY),
            'comments'    => __('apollon._.comments', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-sidebar-position'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-position.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'radio',
        'choices'  => [
            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
        ],
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-sidebar-1'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-1.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $pages[$slug.'-pages-'.$p]['controls'][$p.'-sidebar-2'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-2.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    if ('frontpage' !== $p) {
        $pages[$slug.'-pages-'.$p]['controls'][$p.'-sidebars'] = [
            'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ];
    }
}

// SIMPLE PAGES
foreach (['404', 'attachment'] as $p) {
    $pages[$slug.'-pages-'.$p] = [
        'title'    => __('apollon.cz.layout.'.$p.'.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            $p.'-use-default' => [
                'label'       => __('apollon.cz.layout.default.use-default.title', OL_APOLLON_DICTIONARY),
                'description' => sprintf(
                    __('apollon.cz.layout.default.use-default.desc', OL_APOLLON_DICTIONARY),
                    admin_url('/customize.php?autofocus[section]=lt-website-configs')
                ),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
            ],
            $p.'-container' => [
                'label'    => __('apollon.cz.layout.default.grid-container.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                    'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
            ],
            $p.'-content' => [
                'label'    => __('apollon.cz.layout.default.grid-content.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                    '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                    '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                    '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                    '2-5'    => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
                    '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                    '3-5'    => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
                    '2-3'    => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
                    '3-4'    => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
                    '4-5'    => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
                    '5-6'    => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
                    '1-1'    => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ];
}

return $pages;
