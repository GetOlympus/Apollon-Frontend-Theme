<?php

/**
 * Apollon sidebars hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// SIDEBARS

add_filter('ol.apollon.sidebar_options', function ($options, $sidebar = '1', $template = 'page') {
    /*// `footer` case
    if ('footer' === $template) {
        return array_merge($options, [
            'attrs' => ' uk-grid',
            'css'   => ' uk-grid-match uk-child-width-1-3@m',
            '_tpl'  => $template,
        ]);
    }

    $page = 'features-sidebar-'.$template;
    $pos  = 'features-sidebar-'.$sidebar;

    // Check sidebar display
    if ('sidebar'.$sidebar !== $apollon[$page.'-display']) {
        return [];
    }

    // Update options
    $options = array_merge($options, [
        //'display'    => $apollon[$page.'-display'],
        'content'    => isset($apollon[$page.'-content']) ? (bool) $apollon[$page.'-content'] : '',

        'mobile'     => (bool) $apollon[$pos.'-mobile'],
        'sticky'     => (bool) $apollon[$pos.'-sticky'],
        'size'       => $apollon[$pos.'-size'],
        'background' => $apollon[$pos.'-background'],
        'paddingh'   => $apollon[$pos.'-paddingh'],
        'paddingv'   => $apollon[$pos.'-paddingv'],
    ]);

    $options['_tpl'] = ($options['content'] ? 'page' : $template).'-'.$sidebar;

    // Freedom
    unset($side2);
    unset($side1);
    unset($page);
    unset($pos);
    unset($display);*/

    return $options;
}, 10, 3);
