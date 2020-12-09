<?php

/**
 * Archive _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Override sidebar order.
 *
 * @param  array   $_loop
 *
 * @return array
 */
$_loop['order'] = apply_filters('ol.apollon.archive_sidebar_order', $_loop['sidebar']);


/**
 * Fires before displaying `_default` archive.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.archive_'.$_loop['template'].'_before', $_loop);

?>

<?php if (!empty($_loop['title'])) : ?>
    <section class="uk-section uk-section-primary uk-light">
        <div class="uk-container">
            <?php if (!empty($_loop['suptitle'])) : ?>
                <span class="uk-text-meta"><?php echo $_loop['suptitle'] ?></span>
            <?php endif ?>

            <h1 class="uk-margin-remove"><?php echo $_loop['title'] ?></h1>

            <?php if (!empty($_loop['subtitle'])) : ?>
                <?php echo $_loop['subtitle'] ?>
            <?php endif ?>
        </div>
    </section>
<?php endif ?>

<section class="uk-margin-large-top">
    <div class="uk-grid uk-flex-center" uk-grid>

        <?php

        // Check sidebar #1
        if (in_array($_loop['order'], ['center','left'])) {
            apollonGetPart('sidebar.php', [
                'sidebar'  => 1,
                'template' => $_loop['sidebar'],
            ]);
        }

        // Check sidebar #2
        if ('left' === $_loop['order']) {
            apollonGetPart('sidebar.php', [
                'sidebar'  => 2,
                'template' => $_loop['sidebar'],
            ]);
        }

        ?>

        <div class="uk-width-1-1@s uk-width-expand">
            <?php

            if ('search' === $_loop['template']) {
                apollonGetPart('searchform.php', [
                    'template' => 'full',
                ]);
            }

            while (have_posts()) {
                apollonGetPart('format.php', []);
            }

            apollonGetPart('pagination.php', []);

            ?>
        </div>

        <?php

        // Check sidebar #2
        if (in_array($_loop['order'], ['center','right'])) {
            apollonGetPart('sidebar.php', [
                'sidebar'  => 2,
                'template' => $_loop['sidebar'],
            ]);
        }

        // Check sidebar #1
        if ('right' === $_loop['order']) {
            apollonGetPart('sidebar.php', [
                'sidebar'  => 1,
                'template' => $_loop['sidebar'],
            ]);
        }

        ?>

    </div>
</section>

<?php


/**
 * Fires after displaying `_default` archive.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.archive_'.$_loop['template'].'_after', $_loop);
