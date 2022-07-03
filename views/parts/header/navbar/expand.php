<?php

/**
 * Navbar expand part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}

?>

<?php if (!empty($_navbar['content-1'])) : ?>
    <div class="<?php echo $nav ?>-overlay uk-navbar-left">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 1, $_navbar) ?>
    </div>
<?php endif ?>

<?php if (!empty($_navbar['content-2'])) : ?>
    <div class="<?php echo $nav ?>-overlay uk-navbar-center">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 2, $_navbar) ?>
    </div>
<?php endif ?>

<?php if (!empty($_navbar['content-3'])) : ?>
    <div class="<?php echo $nav ?>-overlay uk-navbar-right">
        <?php do_action('ol.apollon.header_build_navbar', $nav, 3, $_navbar) ?>
    </div>
<?php endif ?>

<?php
