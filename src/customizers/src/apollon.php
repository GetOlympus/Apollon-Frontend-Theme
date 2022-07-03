<?php

/**
 * Apollon customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$css  = 'background-color:#bf26ff;background-image:linear-gradient(to right top,#bf26ff,#b42dff,#aa32ff,';
$css .= '#9f37ff,#933bff,#8743ff,#7b49ff,#6f4fff,#5f58ff,#4e5fff,#3a65ff,#1f6bff);';
$css .= 'border-left:0;margin-top:15px;padding-left:18px';

return [
    'apollon-rtfm' => [
        'title'         => __('apollon.cz.apollon.intro.title', OL_APOLLON_DICTIONARY),
        'priority'      => ++$priority,
        'type'          => 'apollon-custom',
        'url'           => 'https://github.com/GetOlympus/',
        'icon'          => 'dashicons dashicons-external',
        'link_style'    => 'color:#fff;font-weight:700;text-decoration:none',
        'section_style' => $css,
        '_classname'    => 'ApollonFrontendTheme\\Src\\Sections\\ApollonCustomSection',
    ],

    'apollon-outro' => [
        'title'             => __('apollon.cz.apollon.outro.title', OL_APOLLON_DICTIONARY),
        'priority'          => 100000,
        'type'              => 'apollon-custom',
        'description_style' => 'font-weight:200;margin:0',
        'section_style'     => 'background:transparent;border:0;padding:10px 10px 10px 16px',
        '_classname'        => 'ApollonFrontendTheme\\Src\\Sections\\ApollonCustomSection',
    ],
];
