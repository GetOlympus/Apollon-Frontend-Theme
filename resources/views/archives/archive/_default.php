<?php

/**
 * Archive _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_archive)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Override sidebar order.
 *
 * @param  array   $_archive
 *
 * @return array
 */
$_archive['order'] = apply_filters('ol.apollon.archive_sidebar_order', $_archive['sidebar']);


/**
 * Fires before displaying `_default` archive.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_'.$_archive['template'].'_before', $_archive);

?>

<?php if (!empty($_archive['title'])) : ?>
    <section class="uk-section uk-section-primary uk-light">
        <div class="uk-container">
            <?php if (!empty($_archive['suptitle'])) : ?>
                <span class="uk-text-meta"><?php echo $_archive['suptitle'] ?></span>
            <?php endif ?>

            <h1 class="uk-margin-remove"><?php echo $_archive['title'] ?></h1>

            <?php if (!empty($_archive['subtitle'])) : ?>
                <?php echo $_archive['subtitle'] ?>
            <?php endif ?>
        </div>
    </section>
<?php endif ?>

<section class="uk-margin-large-top">
    <div class="uk-grid uk-flex-center" uk-grid>

        <?php
            // Check sidebar #1
            if (in_array($_archive['order'], ['center','left'])) {
                $_inc = [
                    'filename' => 'sidebar.php',
                    'part'     => true,
                    'vars'     => [
                        'sidebar'  => 1,
                        'template' => $_archive['sidebar'],
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            }

            // Check sidebar #2
            if ('left' === $_archive['order']) {
                $_inc = [
                    'filename' => 'sidebar.php',
                    'part'     => true,
                    'vars'     => [
                        'sidebar'  => 2,
                        'template' => $_archive['sidebar'],
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            }
        ?>

        <div class="uk-width-1-1@s uk-width-expand">
            <?php
                if ('search' === $_archive['template']) {
                    $_inc = [
                        'filename' => 'searchform.php',
                        'part'     => true,
                        'vars'     => [
                            'template' => 'full',
                        ],
                    ];

                    include OL_APOLLON_VIEWSPATH.'_inc.php';
                }

                while (have_posts()) {
                    $_inc = [
                        'filename' => 'format.php',
                        'part'     => true,
                        'vars'     => [],
                    ];

                    include OL_APOLLON_VIEWSPATH.'_inc.php';
                }

                $_inc = [
                    'filename' => 'pagination.php',
                    'part'     => true,
                    'vars'     => [],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            ?>
        </div>

        <?php
            // Check sidebar #2
            if (in_array($_archive['order'], ['center','right'])) {
                $_inc = [
                    'filename' => 'sidebar.php',
                    'part'     => true,
                    'vars'     => [
                        'sidebar'  => 2,
                        'template' => $_archive['sidebar'],
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            }

            // Check sidebar #1
            if ('right' === $_archive['order']) {
                $_inc = [
                    'filename' => 'sidebar.php',
                    'part'     => true,
                    'vars'     => [
                        'sidebar'  => 1,
                        'template' => $_archive['sidebar'],
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            }
        ?>

    </div>
</section>

<?php


/**
 * Fires after displaying `_default` archive.
 *
 * @param  array   $_archive
 */
do_action('ol.apollon.archive_'.$_archive['template'].'_after', $_archive);
