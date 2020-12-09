<?php

/**
 * Footer customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 700;

$_contents = $this->contents['navs_contents'];
unset($_contents['custom']);
unset($_contents['menu']);

$footer = [];

foreach (['top', 'main', 'sub'] as $section) {
    $footer['ft-'.$section] = [
        'title'       => sprintf(
            __('apollon.ct.footer.section.title', OL_APOLLON_DICTIONARY),
            ucfirst($section)
        ),
        'priority'    => ++$priority,

        'controls'    => [
            $section.'section_enable' => [
                'label'       => sprintf(
                    __('apollon.ct.footer.section.enable.title', OL_APOLLON_DICTIONARY),
                    ucfirst($section)
                ),
                'description' => sprintf(
                    __('apollon.ct.footer.section.enable.desc', OL_APOLLON_DICTIONARY),
                    $section
                ),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],

            $section.'section_contents' => array_merge($this->contents['control_title'], [
                'label'       => __('apollon.ct.footer.section.contents.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            $section.'section_content_1' => [
                'label'       => __('apollon.ct.footer.section.contents.content_1.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.contents.content_1.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_content_1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_content_2' => [
                'label'       => __('apollon.ct.footer.section.contents.content_2.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.contents.content_2.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_content_2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_content_3' => [
                'label'       => __('apollon.ct.footer.section.contents.content_3.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.contents.content_3.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_content_3'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_content_4' => [
                'label'       => __('apollon.ct.footer.section.contents.content_4.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.contents.content_4.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_content_4'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],

            $section.'section_layout' => array_merge($this->contents['control_title'], [
                'label'       => __('apollon.ct.footer.section.layout.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            $section.'section_size_1' => [
                'label'       => __('apollon.ct.footer.section.layout.size_1.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.size_1.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
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
                    'auto'   => __('apollon._.auto', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_size_1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_size_2' => [
                'label'       => __('apollon.ct.footer.section.layout.size_2.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.size_2.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
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
                    'auto'   => __('apollon._.auto', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_size_2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_size_3' => [
                'label'       => __('apollon.ct.footer.section.layout.size_3.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.size_3.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
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
                    'auto'   => __('apollon._.auto', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_size_3'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_size_4' => [
                'label'       => __('apollon.ct.footer.section.layout.size_4.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.size_4.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
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
                    'auto'   => __('apollon._.auto', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_size_4'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_fullwidth' => [
                'label'       => __('apollon.ct.footer.section.layout.fullwidth.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.fullwidth.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_fullwidth'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            $section.'section_background' => [
                'label'       => __('apollon.ct.footer.section.layout.background.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.background.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'transparent' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'muted'       => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                    'secondary'   => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'primary'     => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $section.'section_fontsize' => [
                'label'       => __('apollon.ct.footer.section.layout.fontsize.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.fontsize.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'max'  => 100,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_fontsize'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            $section.'section_lineheight' => [
                'label'       => __('apollon.ct.footer.section.layout.lineheight.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.lineheight.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'max'  => 100,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_lineheight'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            $section.'section_padding' => [
                'label'       => __('apollon.ct.footer.section.layout.padding.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.footer.section.layout.padding.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($section.'section_padding'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ];
}

return [
    'footer-ft' => [
        'title'       => __('apollon.ct.footer.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.ct.footer.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'sections'    => $footer,
    ],
];
