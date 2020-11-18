<?php

/**
 * Single post default display dribbble subpart.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_single_item)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build attributes.
 * @see hook ol.apollon.build_attrs
 */
$_single_item['attrs'] = apply_filters('ol.apollon.build_attrs', [
    'container' => [
        'class'   => 'ap-s ap-s-dribbble uk-container uk-margin-large-top',
    ],
    'header'    => [
        'class'   => 'uk-flex-middle uk-grid uk-padding',
        'uk-grid' => false,
    ],
    'thumbnail' => [
        'class'   => 'uk-width-3-5@m uk-flex-first uk-padding-small uk-image',
    ],
    'main'      => [
        'class'   => 'uk-section uk-margin-top',
    ],
    'sidebar'   => [
        'class'   => 'uk-section uk-section-xsmall',
    ],
    'footer'    => [
        'class'   => 'uk-section uk-section-xsmall',
    ],
]);


/**
 * Override single post content html.
 *
 * @param  array   $_html
 * @param  array   $_single_item
 *
 * @return array
 */
$_single_item['html'] = apply_filters('ol.apollon.single_post_dribbble_html', [
    'categories' => empty($_single_item['categories']) ? '' : sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_DICTIONARY),
        'uk-text-uppercase',
        $_single_item['categories']
    ),
    'excerpt'    => sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_DICTIONARY),
        'uk-text-meta uk-text-large uk-dropcap',
        $_single_item['excerpt']
    ),
    'meta'       => sprintf(
        __('<small>%s, %s</small>', OL_APOLLON_DICTIONARY),
        sprintf(
            __('<img src="%s" alt="%s" width="%d"/> %s <a href="%s">%s</a>', OL_APOLLON_DICTIONARY),
            $_single_item['author']['avatar']['full']['url'],
            esc_attr($_single_item['author']['name']),
            $_single_item['author']['avatar']['full']['width'],
            $_single_item['labels']['by'],
            $_single_item['author']['link'],
            $_single_item['author']['name']
        ),
        sprintf(
            __('%s <time datetime="%s">%s</time>', OL_APOLLON_DICTIONARY),
            $_single_item['labels']['on'],
            $_single_item['dates']['c'],
            $_single_item['dates']['long']
        )
    ),
    'thumbnail'  => empty($_single_item['images']) ? '' : sprintf(
        __('<figure %s>%s</figure>', OL_APOLLON_DICTIONARY),
        $_single_item['attrs']['thumbnail'],
        $_single_item['images']['original']
    ),
    'title'      => sprintf(
        __('<h1 class="%s">%s</h1>', OL_APOLLON_DICTIONARY),
        'uk-article-title uk-margin-small-top',
        $_single_item['title']
    ),
], $_single_item);


/**
 * Override single post content order.
 *
 * @param  array   $order
 *
 * @return array
 */
$_single_item['order'] = apply_filters('ol.apollon.single_post_dribbble_order', [
    $_single_item['html']['title'],
    $_single_item['html']['meta'],
    $_single_item['html']['categories'],
]);


/**
 * Fires before displaying single post container.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_dribbble_container_before', $_single_item);

?>

<article <?php echo $_single_item['attrs']['container'] ?>>
    <?php
        /**
         * Fires before displaying single post header.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_header_before', $_single_item);
    ?>

    <header <?php echo $_single_item['attrs']['header'] ?>>
        <div class="uk-width-expand uk-article">
            <?php foreach ($_single_item['order'] as $item) : ?>
                <?php echo $item ?>
            <?php endforeach ?>
        </div>

        <?php
            /**
             * Fires before displaying single post thumbnail.
             *
             * @param  array   $_single_item
             */
            do_action('ol.apollon.single_post_dribbble_thumbnail_before', $_single_item);


            /**
             * Override single post thumbnail.
             *
             * @param  string  $thumbnail
             *
             * @return string
             */
            echo apply_filters('ol.apollon.single_post_dribbble_thumbnail', $_single_item['html']['thumbnail']);


            /**
             * Fires after displaying single post thumbnail.
             *
             * @param  array   $_single_item
             */
            do_action('ol.apollon.single_post_dribbble_thumbnail_after', $_single_item);
        ?>
    </header>

    <?php
        /**
         * Fires after displaying single post header.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_header_after', $_single_item);
    ?>

    <main <?php echo $_single_item['attrs']['main'] ?>>
        <div class="uk-container uk-container-small">
            <?php echo $_single_item['html']['excerpt'] ?>

            <main class="uk-article uk-margin-top">
                <?php
                    /**
                     * Fires before displaying single post content.
                     *
                     * @param  array   $_single_item
                     */
                    do_action('ol.apollon.single_post_dribbble_content_before', $_single_item);

                    the_content();


                    /**
                     * Fires after displaying single post content.
                     *
                     * @param  array   $_single_item
                     */
                    do_action('ol.apollon.single_post_dribbble_content_after', $_single_item);

                ?>
            </main>
        </div>
    </main>

    <?php
        /**
         * Fires before displaying single post sidebar.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_sidebar_before', $_single_item);
    ?>

    <aside <?php echo $_single_item['attrs']['sidebar'] ?>>
        <div class="uk-container uk-container-small">
            <?php apollonGetPart('sidebar.php', [
                'template' => 'single-post',
            ]) ?>
        </div>
    </aside>

    <?php
        /**
         * Fires after displaying single post sidebar.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_sidebar_after', $_single_item);


        /**
         * Fires before displaying single post footer.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_footer_before', $_single_item);
    ?>

    <footer <?php echo $_single_item['attrs']['footer'] ?>>
        <div class="uk-container uk-container-small">
            <?php apollonGetPart('comments.php', [
                'args'     => $_single_item,
                'template' => 'default',
            ]) ?>
        </div>
    </footer>

    <?php
        /**
         * Fires after displaying single post footer.
         *
         * @param  array   $_single_item
         */
        do_action('ol.apollon.single_post_dribbble_footer_after', $_single_item);
    ?>
</article>

<?php


/**
 * Fires after displaying single post container.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_dribbble_container_after', $_single_item);
