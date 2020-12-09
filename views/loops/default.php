<?php

/**
 * Loop default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}

// Loop defaults
$_loop = array_merge([
    'meta'    => '',
    'sidebar' => 'archives',
    'title'   => '',
], $_loop);

// Update vars
$_loop = array_merge($_loop, [
    'columns'    => apollonGetOption('layout_'.$_loop['sidebar'].'_columns'),
    'container'  => apollonGetOption('layout_'.$_loop['sidebar'].'_container'),
    'content'    => apollonGetOption('layout_'.$_loop['sidebar'].'_content'),
    'gridgap'    => apollonGetOption('layout_'.$_loop['sidebar'].'_gridgap'),
    'sidebarpos' => apollonGetOption('layout_'.$_loop['sidebar'].'_sidebarpos'),
    'sidebar1'   => apollonGetOption('layout_'.$_loop['sidebar'].'_sidebar1'),
    'sidebar2'   => apollonGetOption('layout_'.$_loop['sidebar'].'_sidebar2'),
    'sidebars'   => apollonGetOption('layout_'.$_loop['sidebar'].'_sidebars'),
]);


/**
 * Fires before displaying default loop.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.loop_default_before', $_loop);

get_header();

?>

<?php if (!empty($_loop['title'])) : ?>
    <!-- title -->
    <h3 class="uk-margin-remove uk-text-center">
        <?php if (!empty($_loop['meta'])) : ?>
            <?php echo $_loop['meta'] ?>
        <?php endif ?>

        <?php echo $_loop['title'] ?>
    </h3>
<?php endif ?>

<!-- container -->
<section class="l-default uk-section uk-container uk-container-<?php echo $_loop['container'] ?>">
    <div class="uk-grid uk-flex-center" uk-grid>

        <!-- items -->
        <div class="<?php echo sprintf(
            'uk-width-1-1@s uk-width-%s@m uk-child-width-1-%s uk-grid-%s',
            $_loop['content'],
            $_loop['columns'],
            $_loop['gridgap']
        ) ?>" uk-grid>

            <?php

            while (have_posts()) {
                apollonGetPart('post.php', []);

                if (1 >= $_loop['columns']) {
                    /**
                     * Build separator.
                     *
                     * @param  string  $separator
                     * @param  string  $template
                     *
                     * @return string
                     */
                    echo apply_filters('ol.apollon.build_separator', '', 'default');
                }
            }

            apollonGetPart('pagination.php', []);

            ?>

        </div>

        <?php

        /**
         * Fires before displaying loop sidebar.
         *
         * @param  array   $_loop
         */
        do_action('ol.apollon.loop_default_sidebar_before', $_loop);

        // Display sidebars
        if ('left' === $_loop['sidebarpos']) {
            if ($_loop['sidebar1']) {
                apollonGetPart('sidebar.php', [
                    'css'      => 'uk-flex-first',
                    'override' => $_loop['sidebars'],
                    'sidebar'  => $_loop['sidebar'].'_1',
                ]);
            }

            if ($_loop['sidebar2']) {
                apollonGetPart('sidebar.php', [
                    'css'      => 'uk-flex-first',
                    'override' => $_loop['sidebars'],
                    'sidebar'  => $_loop['sidebar'].'_2',
                ]);
            }
        }

        if ('center' === $_loop['sidebarpos'] && $_loop['sidebar1']) {
            apollonGetPart('sidebar.php', [
                'css'      => 'uk-flex-first',
                'override' => $_loop['sidebars'],
                'sidebar'  => $_loop['sidebar'].'_1',
            ]);
        }

        if ('center' === $_loop['sidebarpos'] && $_loop['sidebar2']) {
            apollonGetPart('sidebar.php', [
                'override' => $_loop['sidebars'],
                'sidebar'  => $_loop['sidebar'].'_2',
            ]);
        }

        if ('right' === $_loop['sidebarpos']) {
            if ($_loop['sidebar1']) {
                apollonGetPart('sidebar.php', [
                    'override' => $_loop['sidebars'],
                    'sidebar'  => $_loop['sidebar'].'_1',
                ]);
            }

            if ($_loop['sidebar2']) {
                apollonGetPart('sidebar.php', [
                    'override' => $_loop['sidebars'],
                    'sidebar'  => $_loop['sidebar'].'_2',
                ]);
            }
        }


        /**
         * Fires after displaying loop sidebar.
         *
         * @param  array   $_loop
         */
        do_action('ol.apollon.loop_default_sidebar_after', $_loop);

        ?>

    </div>
</section>

<?php

get_footer();


/**
 * Fires after displaying default loop.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.loop_default_after', $_loop);

// Freedom
unset($_loop);
