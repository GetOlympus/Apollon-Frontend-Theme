<?php

/**
 * Custom post types options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

// Check public post types
if (empty($this->contents['posttypes'])) {
    return [];
}

// CUSTOM POST TYPES
$cpts = [
    $slug.'-cpts' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.layout.cpts.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),
];

// Build CPT configurations
foreach ($this->contents['posttypes'] as $name => $title) {
    if (in_array($name, ['page'])) {
        continue;
    }

    // Build CPT
    $cpts[$slug.'-cpt-'.$name] = [
        'title'    => $title,
        'priority' => ++$priority,
        'controls' => [
            // Loop
            $slug.'-cpt-'.$name.'-loop' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.loop', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            $name.'-loop-template' => [
                'label'    => __('apollon.cz.layout.default.template.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'    => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'cover'      => __('apollon._.cover', OL_APOLLON_DICTIONARY),
                    'text'       => __('apollon._.text', OL_APOLLON_DICTIONARY),
                    'horizontal' => __('apollon._.horizontal', OL_APOLLON_DICTIONARY),
                    'vertical'   => __('apollon._.vertical', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-thumbnail' => [
                'label'    => __('apollon.cz.layout.default.thumbnail.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'thumbnail' => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'medium'    => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                    'large'     => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'full'      => __('apollon._.full', OL_APOLLON_DICTIONARY),
                    'cover'     => __('apollon._.cover', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-title-tag' => [
                'label'    => __('apollon.cz.layout.default.title-tag.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'h1'   => __('apollon._.h1', OL_APOLLON_DICTIONARY),
                    'h2'   => __('apollon._.h2', OL_APOLLON_DICTIONARY),
                    'h3'   => __('apollon._.h3', OL_APOLLON_DICTIONARY),
                    'h4'   => __('apollon._.h4', OL_APOLLON_DICTIONARY),
                    'h5'   => __('apollon._.h5', OL_APOLLON_DICTIONARY),
                    'h6'   => __('apollon._.h6', OL_APOLLON_DICTIONARY),
                    'div'  => __('apollon._.div', OL_APOLLON_DICTIONARY),
                    'span' => __('apollon._.span', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-title-display' => [
                'label'    => __('apollon.cz.layout.default.title-display.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'h1' => __('apollon._.h1', OL_APOLLON_DICTIONARY),
                    'h2' => __('apollon._.h2', OL_APOLLON_DICTIONARY),
                    'h3' => __('apollon._.h3', OL_APOLLON_DICTIONARY),
                    'h4' => __('apollon._.h4', OL_APOLLON_DICTIONARY),
                    'h5' => __('apollon._.h5', OL_APOLLON_DICTIONARY),
                    'h6' => __('apollon._.h6', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-category-link' => [
                'label'    => __('apollon.cz.layout.default.category-link.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-loop-use-content' => [
                'label'    => __('apollon.cz.layout.default.use-content.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-loop-excerpt' => [
                'label'    => __('apollon.cz.layout.default.excerpt.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'number',
            ],
            $name.'-loop-readmore-title' => [
                'label'    => __('apollon.cz.layout.default.readmore-title.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            $name.'-loop-readmore-style' => [
                'label'    => __('apollon.cz.layout.default.readmore-style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'danger'    => __('apollon._.danger', OL_APOLLON_DICTIONARY),
                    'text'      => __('apollon._.text', OL_APOLLON_DICTIONARY),
                    'link'      => __('apollon._.link', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-readmore-icon' => [
                'label'    => __('apollon.cz.layout.default.readmore-icon.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-loop-elements' => [
                'label'       => __('apollon.cz.layout.default.elements.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.cz.layout.default.elements.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'thumbnail'  => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'      => __('apollon._.title', OL_APOLLON_DICTIONARY),
                    'categories' => __('apollon._.categories', OL_APOLLON_DICTIONARY),
                    'metas'      => __('apollon._.metas', OL_APOLLON_DICTIONARY),
                    'excerpt'    => __('apollon._.excerpt', OL_APOLLON_DICTIONARY),
                    'readmore'   => __('apollon._.readmore', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-metas' => [
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
                    'readingtime' => __('apollon._.readingtime', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-cover-style' => [
                'label'    => __('apollon.cz.layout.default.cover-style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    ''        => __('apollon.cz.layout.default.cover-style.no-background', OL_APOLLON_DICTIONARY),
                    'default' => __('apollon.cz.layout.default.cover-style.default', OL_APOLLON_DICTIONARY),
                    'primary' => __('apollon.cz.layout.default.cover-style.primary', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-loop-vertical-style' => [
                'label'    => __('apollon.cz.layout.default.vertical-style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                ],
            ],

            // Single
            $slug.'-cpt-'.$name.'-single' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.single', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            $name.'-container' => [
                'label'    => __('apollon.cz.layout.default.grid-container.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'xsmall'  => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                    'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'xlarge'  => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                    'expand'  => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-padding' => [
                'label'    => __('apollon.cz.layout.default.grid-padding.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-content' => [
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
            $name.'-contents' => [
                'label'       => __('apollon.cz.layout.default.elements.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'thumbnail'   => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'       => __('apollon._.title', OL_APOLLON_DICTIONARY),
                    'categories'  => __('apollon._.categories', OL_APOLLON_DICTIONARY),
                    'metas'       => __('apollon._.metas', OL_APOLLON_DICTIONARY),
                    'excerpt'     => __('apollon._.excerpt', OL_APOLLON_DICTIONARY),
                    'content'     => __('apollon._.content', OL_APOLLON_DICTIONARY),
                    'tags'        => __('apollon._.tags', OL_APOLLON_DICTIONARY),
                    'social'      => __('apollon._.social', OL_APOLLON_DICTIONARY),
                    'nextprev'    => __('apollon._.nextprev', OL_APOLLON_DICTIONARY),
                    'author'      => __('apollon._.author', OL_APOLLON_DICTIONARY),
                    'related'     => __('apollon._.related', OL_APOLLON_DICTIONARY),
                    'commentform' => __('apollon._.commentform', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-metas' => [
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
                    'readingtime' => __('apollon._.readingtime', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-avatar' => [
                'label'    => __('apollon.cz.layout.default.avatar.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-feature' => [
                'label'    => __('apollon.cz.layout.default.feature.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-expand' => [
                'label'    => __('apollon.cz.layout.default.expand.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-header' => [
                'label'    => __('apollon.cz.layout.default.header.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'apollon-multicheck',
                'choices'  => [
                    'thumbnail'   => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
                    'overlay'     => __('apollon._.overlay', OL_APOLLON_DICTIONARY),
                    'title'       => __('apollon._.title', OL_APOLLON_DICTIONARY),
                    'categories'  => __('apollon._.categories', OL_APOLLON_DICTIONARY),
                    'author'      => __('apollon._.author', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.comments', OL_APOLLON_DICTIONARY),
                    'readingtime' => __('apollon._.readingtime', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-sidebar-position' => [
                'label'    => __('apollon.cz.layout.default.sidebar-position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'radio',
                'choices'  => [
                    'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                    'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                    'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                ],
            ],
            $name.'-sidebar-1' => [
                'label'    => __('apollon.cz.layout.default.sidebar-1.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-sidebar-2' => [
                'label'    => __('apollon.cz.layout.default.sidebar-2.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            $name.'-sidebars' => [
                'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
        ],
    ];
}

return $cpts;
