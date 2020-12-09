<?php

/**
 * Apollon thumbnail elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

if (!empty($_element['data']['images'])) {
    $_element['_size'] = in_array($_element['size'], ['thumbnail', 'full']) ? $_element['size'] : 'thumbnail';

    echo sprintf(
        '<a href="%s" title="%s" class="%s">',
        $_element['data']['link'],
        $_element['data']['esc_title'],
        !empty($_element['css']) ? $_element['css'] : 'uk-display-block uk-margin-remove-top uk-margin-small-bottom'
    );

    if ($_element['canvas']) {
        echo sprintf(
            '<canvas width="%s" height="%d"></canvas>',
            '100%',
            $_element['data']['images']['height']
        );
    }

    echo !$_element['canvas']
        ? $_element['data']['images'][$_element['_size']]
        : str_replace('img ', 'img uk-cover ', $_element['data']['images'][$_element['_size']]);

    echo '</a>';

    echo false === $_element['cover']
        ? ''
        : sprintf(
            '<a href="%s" title="%s" class="uk-overlay%s uk-position-cover"></a>',
            $_element['data']['link'],
            $_element['data']['esc_title'],
            !empty($_element['cover']) ? ' uk-overlay-'.$_element['cover'] : ''
        );
}
