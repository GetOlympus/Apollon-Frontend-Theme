<?php

/**
 * Footer _wrapper part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_footer)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build body wrapper close.
 *
 * @return string
 */
echo apply_filters('ol.apollon.body_wrapper_close', '</div>');


/**
 * Build main footer open.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_footer_open', '<footer class="uk-footer">');

// Iterate on sections

foreach (['top', 'main', 'sub'] as $section) {
    // Check if section is enabled
    if (!$_footer['options'][$section.'section_enable']) {
        continue;
    }

    $contents = [];

    foreach (range(1, 4) as $num) {
        if (empty($_footer['options'][$section.'section_content_'.$num])) {
            continue;
        }

        $contents[$num] = [
            'content' => $_footer['options'][$section.'section_content_'.$num],
            'size'    => $_footer['options'][$section.'section_size_'.$num],
        ];
    }

    if (empty($contents)) {
        continue;
    }

    echo sprintf(
        '<section id="%s" class="uk-section uk-section-%s uk-preserve-color">',
        'section-'.$section,
        'transparent'
    );

    echo sprintf(
        '<div class="uk-container uk-container-%s">',
        $_footer['options'][$section.'section_fullwidth'] ? 'expand' : $_footer['options']['grid_container']
    );

    echo '<div class="uk-grid">';

    // Iterate on contents
    foreach ($contents as $num => $ctns) {
        do_action('ol.apollon.footer_build_navbar', $section, $num, $ctns);
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
}


/**
 * Build main footer close.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_footer_close', '</footer>');


/**
 * Build main wrapper close.
 *
 * @return string
 */
echo apply_filters('ol.apollon.main_wrapper_close', '</div>');


/**
 * Fires after displaying main wrapper.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.main_wrapper_after', $_footer);


/**
 * Fires before displaying wp_footer.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.wp_footer_before', $_footer);

wp_footer();


/**
 * Fires after displaying wp_footer.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.wp_footer_after', $_footer);

?>

</body>
</html>
