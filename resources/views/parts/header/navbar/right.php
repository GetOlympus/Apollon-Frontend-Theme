<?php

/**
 * Navbar right part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}

?>

<?php if (!empty($_header['options'][$nav.'nav_content_1'])) : ?>
    <div class="uk-navbar-left">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 1, $_header['options']) ?>
    </div>
<?php endif ?>

<div class="uk-navbar-right">
    <?php
        if (!empty($_header['options'][$nav.'nav_content_2'])) {
            do_action('ol.apollon.header_build_navbar', $nav, 2, $_header['options']);
        }

        if (!empty($_header['options'][$nav.'nav_content_3'])) {
            do_action('ol.apollon.header_build_navbar', $nav, 3, $_header['options']);
        }
    ?>
</div>

<?php
