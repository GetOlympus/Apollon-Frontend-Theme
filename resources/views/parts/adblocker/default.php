<?php

/**
 * Adblocker default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_adblocker)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_default_before', $_adblocker);

?>

<aside id="ECMibnRmsOKB" class="ui modal blocking">
    <div class="image content">
        <div class="ui medium image" style="background-image:url(<?php echo OL_TPL_DIR_URI ?>/resources/assets/img/block.jpg)">
            <img src="<?php echo OL_TPL_DIR_URI ?>/resources/assets/img/block.png" alt="Block" width="110" class="block" />
        </div>

        <div class="description">
            <?php if (isset($_adblocker['content']['code']) && !empty($_adblocker['content']['code'])) : ?>
                <?php echo stripslashes($_adblocker['content']['code']) ?>
            <?php endif ?>

            <p><b id="ECMibnRmsOKB-btn" class="action">Désactivez votre Adblocker</b></p>
            <div id="ECMibnRmsOKB-pup" class="ui flowing popup top left transition hidden">
                <div class="ui three column divided center aligned grid">
                    <div class="column">
                        <h4 class="ui header">1</h4>
                        <p>Cherchez l'octogone rouge sur les icones de votre navigateur</p>
                    </div>

                    <div class="column">
                        <h4 class="ui header">2</h4>
                        <p>Cliquez sur 'Activé sur ce site'</p>
                    </div>

                    <div class="column">
                        <h4 class="ui header">3</h4>
                        <a href="<?php echo $_SERVER['REQUEST_URI'] ?>" class="ui button">J'ai terminé</a>
                    </div>
                </div>
            </div>

            <p>
                <?php if (!empty($_adblocker['register'])) : ?>
                    <a href="<?php echo get_permalink($_adblocker['register']) ?>">
                        <i class="angle right icon"></i> <?php echo get_the_title($_adblocker['register']) ?>
                    </a>
                <?php endif ?>
                <?php if (!empty($_adblocker['connection'])) : ?>
                    <a href="<?php echo get_permalink($_adblocker['connection']) ?>">
                        <i class="angle right icon"></i> <?php echo get_the_title($_adblocker['connection']) ?>
                    </a>
                <?php endif ?>
            </p>
        </div>
    </div>
</aside>

<?php


/**
 * Fires after displaying default adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_default_after', $_adblocker);
