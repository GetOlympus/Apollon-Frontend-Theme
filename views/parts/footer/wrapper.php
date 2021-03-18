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
    if (!$_footer['options']['section-'.$section.'-enable']) {
        continue;
    }

    $_section = array_merge($_footer['options'][$section], ['contents' => []]);

    foreach (range(1, 4) as $num) {
        if (empty($_section['content-'.$num])) {
            continue;
        }

        $_section['contents'][$num] = [
            'content' => $_section['content-'.$num],
            'size'    => $_section['size-'.$num],
        ];
    }

    if (empty($_section['contents'])) {
        continue;
    }

    echo sprintf(
        '<section id="%s" class="uk-section uk-section-%s uk-padding-%s uk-preserve-color">',
        'section-'.$section,
        $_section['background'],
        $_section['padding']
    );

    echo sprintf(
        '<div class="uk-container uk-container-%s">',
        $_section['full-width'] ? 'expand' : $_footer['options']['grid-container']
    );

    echo '<div class="uk-grid">';

    // Iterate on contents
    foreach ($_section['contents'] as $num => $ctns) {
        do_action('ol.apollon.footer_build_navbar', $section, $num, $ctns);
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';

    // Freedom
    unset($_section);
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

// Back to top button
apollonGetPart('backtotop.php', []);


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
