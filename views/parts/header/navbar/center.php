<?php

/**
 * Navbar center part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_navbar)) {
    die('You are not authorized to directly access to this page');
}

?>

<div class="<?php echo $nav ?>-overlay uk-navbar-center">
    <?php if (!empty($_navbar['content-1'])) : ?>
        <div class="uk-navbar-center-left">
            <?php do_action('ol.apollon.header_build_navbar', $nav, 1, $_navbar) ?>
        </div>
    <?php endif ?>

    <div class="uk-navbar-item">
        <?php if (!empty($_navbar['content-2'])) : ?>
            <?php do_action('ol.apollon.header_build_navbar', $nav, 2, $_navbar) ?>
        <?php endif ?>
    </div>

    <?php if (!empty($_navbar['content-3'])) : ?>
        <div class="uk-navbar-center-right">
            <?php do_action('ol.apollon.header_build_navbar', $nav, 3, $_navbar) ?>
        </div>
    <?php endif ?>
</div>

<?php
