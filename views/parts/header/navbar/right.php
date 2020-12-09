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

<?php if (!empty($_navbar['content_1'])) : ?>
    <div class="<?php echo $nav ?>-overlay uk-navbar-left">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 1, $_navbar) ?>
    </div>
<?php endif ?>

<div class="<?php echo $nav ?>-overlay uk-navbar-right">
    <?php

    if (!empty($_navbar['content_2'])) {
        do_action('ol.apollon.header_build_navbar', $nav, 2, $_navbar);
    }

    if (!empty($_navbar['content_3'])) {
        do_action('ol.apollon.header_build_navbar', $nav, 3, $_navbar);
    }

    ?>
</div>

<?php
