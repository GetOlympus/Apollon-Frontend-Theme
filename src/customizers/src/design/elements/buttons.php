<?php

/**
 * Buttons options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$buttons = [];

// BORDERS
$buttons[$slug.'-buttons-borders-title'] = array_merge($this->contents['control_subtitle'], [
    'label'    => __('apollon.cz.design.borders.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
]);
$buttons['global-border'] = [
    'label'    => __('apollon.cz.design.global.border.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'type'     => 'color',
];
$buttons['global-border-radius'] = [
    'label'    => __('apollon.cz.design.global.border-radius.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'type'     => 'number',
];
$buttons['global-border-width'] = [
    'label'    => __('apollon.cz.design.global.border-width.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'type'     => 'number',
];

// BUTTONS
foreach (['default', 'primary', 'secondary', 'danger'] as $style) {
    $buttons[$slug.'-buttons-'.$style.'-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon._.'.$style, OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $buttons['global-button-'.$style.'-color'] = [
        'label'    => __('apollon._.text', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'color',
    ];
    $buttons['global-button-'.$style.'-background'] = [
        'label'    => __('apollon._.background', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'color',
    ];
}

return [
    'title'    => __('apollon.cz.design.buttons.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => $buttons,
];
