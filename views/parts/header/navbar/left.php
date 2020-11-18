<?php

/**
 * Navbar left part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}

?>

<div class="uk-navbar-left">
    <?php

    if (!empty($_header['options'][$nav.'nav_content_1'])) {
        do_action('ol.apollon.header_build_navbar', $nav, 1, $_header['options']);
    }

    if (!empty($_header['options'][$nav.'nav_content_2'])) {
        do_action('ol.apollon.header_build_navbar', $nav, 2, $_header['options']);
    }

    ?>
</div>

<?php if (!empty($_header['options'][$nav.'nav_content_3'])) : ?>
    <div class="uk-navbar-right">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 3, $_header['options']) ?>
    </div>
<?php endif ?>

<?php
