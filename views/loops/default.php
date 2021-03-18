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

// Check template
if (!isset($_loop['template'])) {
    $_loop['template'] = $_loop['sidebar'];
}

// Update vars
$_loop = array_merge($_loop, apply_filters('ol.apollon.loops_options', $_loop['template']));


/**
 * Fires before displaying default loop.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.loop_default_before', $_loop);

// Include header template
include_once __DIR__.S.'header'.S.'default.php';

get_header();

?>

<!-- container -->
<section class="l-default uk-section uk-container uk-container-<?php echo $_loop['container'] ?>">
    <div class="uk-grid uk-flex-center" uk-grid>

        <!-- items -->
        <div class="<?php echo sprintf(
            'uk-width-1-1@s uk-width-%s@m uk-child-width-1-%s uk-grid-%s%s%s',
            $_loop['content'],
            $_loop['columns'],
            $_loop['gridgap'],
            $_loop['divider'] ? ' uk-grid-divider' : '',
            $_loop['match-height'] ? ' uk-grid-match' : ''
        ) ?>" uk-grid>

            <?php

            while (have_posts()) {
                apollonGetPart('post.php', []);
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


        /**
         * Fires before displaying loop sidebar.
         *
         * @param  array   $_loop
         */
        do_action('ol.apollon.loop_default_sidebar', $_loop);


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
