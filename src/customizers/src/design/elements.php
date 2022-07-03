<?php

/**
 * Elements options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// ELEMENTS
    $slug.'-elements' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.elements.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

    $slug.'-buttons'    => include_once __DIR__.S.'elements'.S.'buttons.php',
    $slug.'-boxshadows' => include_once __DIR__.S.'elements'.S.'boxshadows.php',
    $slug.'-controls'   => include_once __DIR__.S.'elements'.S.'controls.php',
    $slug.'-navbars'    => include_once __DIR__.S.'elements'.S.'navbars.php',
];
