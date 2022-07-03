<?php

/**
 * Navs options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// NAVS
    $slug.'-navs' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.components.navs.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

    /*// Dotnav
    $slug.'-dotnav' => [
        'title'    => 'Dotnav',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Iconnav
    $slug.'-iconnav' => [
        'title'    => 'Iconnav',
        'priority' => ++$priority,
        'controls' => [],
    ],*/

    // Nav
    $slug.'-nav' => [
        'title'    => 'Nav',
        'priority' => ++$priority,
        'controls' => [
            'nav-menu' => [
                'label'    => __('apollon.cz.components.nav.menu.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'nav-shadow' => [
                'label'    => __('apollon.cz.components.nav.shadow.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'none'   => __('apollon._.none', OL_APOLLON_DICTIONARY),
                    'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'medium' => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                    'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                ],
            ],
            'nav-sticky' => [
                'label'    => __('apollon.cz.components.nav.sticky.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'static'   => __('apollon._.static', OL_APOLLON_DICTIONARY),
                    'sticky'   => __('apollon._.sticky', OL_APOLLON_DICTIONARY),
                    'scrollup' => __('apollon._.scrollup', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ],

    /*// Navbar
    $slug.'-navbar' => [
        'title'    => 'Navbar',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Offcanvas
    $slug.'-offcanvas' => [
        'title'    => 'Offcanvas',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Slidenav
    $slug.'-slidenav' => [
        'title'    => 'Slidenav',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Subnav
    $slug.'-subnav' => [
        'title'    => 'Subnav',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Thumbnav
    $slug.'-thumbnav' => [
        'title'    => 'Thumbnav',
        'priority' => ++$priority,
        'controls' => [],
    ],*/
];
