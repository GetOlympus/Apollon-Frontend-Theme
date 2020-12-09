<?php

/**
 * Header wrapper part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}

?>

<!DOCTYPE html>
<html<?php echo $_header['args']['htmlattrs'] ?>>
<head>
    <title><?php wp_title() ?></title>

    <?php

    foreach (['metas', 'links', 'scripts'] as $type) {
        echo '<!-- '.$type.' -->'."\n";

        $echo = 'scripts' === $type ? '<script%s></script>' : '<'.rtrim($type, 's').'%s />';

        // Iterate on type
        foreach ($_header[$type] as $content) {
            $ctn = '';

            foreach ($content as $attr => $value) {
                $ctn .= ' '.$attr.'="'.$value.'"';
            }

            echo sprintf($echo."\n", $ctn);
        }
    }


    /**
     * Fires before displaying wp_head.
     *
     * @param  array   $_header
     */
    do_action('ol.apollon.wp_head_before', $_header);

    wp_head();


    /**
     * Fires after displaying wp_head.
     *
     * @param  array   $_header
     */
    do_action('ol.apollon.wp_head_after', $_header);

    ?>
</head>
<body <?php body_class('no-js antialiased '.$_header['args']['bodyclass']) ?>>
<?php

if (function_exists('wp_body_open')) {
    wp_body_open();
} else {
    do_action('wp_body_open');
}


/**
 * Fires before displaying main wrapper.
 *
 * @param  array   $_header
 */
do_action('ol.apollon.main_wrapper_before', $_header);


/**
 * Build main wrapper open.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_wrapper_open', '<div class="uk-offcanvas-content">');


/**
 * Build main header open.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_header_open', sprintf(
    '<header class="uk-header uk-position-relative uk-position-z-index%s"%s>',
    'none' === $_header['options']['nav_shadow']
        ? ''
        : ' uk-box-shadow-'.$_header['options']['nav_shadow'],
    'static' === $_header['options']['nav_sticky']
        ? ''
        : sprintf(
            ' uk-sticky="sel-target:.uk-header;cls-active:uk-navbar-sticky;animation:uk-animation-slide-top;%s"',
            'scrollup' === $_header['options']['nav_sticky'] ? 'show-on-up:true;' : ''
        )
));

// Iterate on navs

foreach (['top', 'main', 'sub'] as $nav) {
    // Check if nav is enabled
    if (!$_header['options'][$nav.'nav_enable']) {
        continue;
    }

    $_navbar = $_header['options'][$nav.'nav'];

    echo sprintf(
        '<nav class="uk-navbar-container uk-navbar-transparent%s uk-padding-%s">',
        'none' !== $_navbar['background'] ? ' uk-background-'.$_navbar['background'] : '',
        $_navbar['padding']
    );

    // Check template
    $tpl = $_navbar['template'];
    $tpl = in_array($tpl, ['center', 'expand', 'left', 'right']) ? $tpl : 'left';

    // Container options
    echo sprintf(
        '<div id="%s" class="uk-container%s%s" uk-navbar="%s%s%s">',
        'nav-'.$nav,
        $_navbar['fullwidth'] ? ' uk-container-expand' : '',
        !$_navbar['mobile'] ? ' uk-visible@s' : '',
        !$_header['options']['dropdown_click'] ? '' : 'mode:click;',
        'default' === $_header['options']['dropdown_position']
            ? ''
            : 'boundary-align:true;align:'.$_header['options']['dropdown_position'].';',
        !$_header['dropbar']
            ? ''
            : 'dropbar:.uk-h-dropbar;dropbar-mode:'.$_header['options']['search_drop'],
    );

    // Include template
    include __DIR__.S.'navbar'.S.$tpl.'.php';


    /**
     * Build main content after navs.
     *
     * @return string
     */
    echo apply_filters('ol.apollon.main_navs_'.$nav.'_after', '');

    echo '</div>';
    echo '</nav>';


    /**
     * Build main content after navbar.
     *
     * @return string
     */
    echo apply_filters('ol.apollon.main_navbar_'.$nav.'_after', '');

    // Freedom
    unset($_navbar);
}


/**
 * Build main header close.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_header_close', '</header>');


/**
 * Build body wrapper open.
 *
 * @return string
 */
echo apply_filters('ol.apollon.body_wrapper_open', sprintf(
    '<div class="uk-container%s">',
    'expand' === $_header['options']['grid_container']
        ? ''
        : ' uk-container-'.$_header['options']['grid_container']
));


/**
 * Build main dropbar content.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_dropbar_content', '<div class="uk-h-dropbar"></div>', $_header['dropbar']);
