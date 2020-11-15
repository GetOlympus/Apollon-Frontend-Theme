<?php

/**
 * Single post default display subpart.
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
        'class'   => 'ap-s uk-container uk-margin-large-top',
    ],
    'header'    => [
        'class'   => 'uk-padding-remove',
    ],
    'thumbnail' => [
        'class'   => 'uk-image',
    ],
    'main'      => [
        'class'   => 'uk-article uk-margin-top',
    ],
    'sidebar'   => [
        'class'   => 'uk-width-1-3@m uk-width-auto@s',
    ],
    'footer'    => [
        'class'   => 'uk-margin-top',
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
$_single_item['html'] = apply_filters('ol.apollon.single_post_default_html', [
    'categories' => empty($_single_item['categories']) ? '' : sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-uppercase',
        $_single_item['categories']
    ),
    'excerpt'    => sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-meta uk-text-large uk-dropcap',
        $_single_item['excerpt']
    ),
    'meta'       => sprintf(
        __('<small>%s, %s</small>', OL_APOLLON_LANGUAGESPATH),
        sprintf(
            __('<img src="%s" alt="%s" width="%d"/> %s <a href="%s">%s</a>', OL_APOLLON_LANGUAGESPATH),
            $_single_item['author']['avatar']['full']['url'],
            esc_attr($_single_item['author']['name']),
            $_single_item['author']['avatar']['full']['width'],
            $_single_item['labels']['by'],
            $_single_item['author']['link'],
            $_single_item['author']['name']
        ),
        sprintf(
            __('%s <time datetime="%s">%s</time>', OL_APOLLON_LANGUAGESPATH),
            $_single_item['labels']['on'],
            $_single_item['dates']['c'],
            $_single_item['dates']['long']
        )
    ),
    'thumbnail'  => empty($_single_item['images']) ? '' : sprintf(
        __('<figure %s>%s</figure>', OL_APOLLON_LANGUAGESPATH),
        $_single_item['attrs']['thumbnail'],
        $_single_item['images']['original']
    ),
    'title'      => sprintf(
        __('<h1 class="%s">%s</h1>', OL_APOLLON_LANGUAGESPATH),
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
$_single_item['order'] = apply_filters('ol.apollon.single_post_default_order', [
    $_single_item['html']['title'],
    $_single_item['html']['meta'],
    $_single_item['html']['categories'],
]);


/**
 * Fires before displaying single post container.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_default_container_before', $_single_item);

?>

<article <?php echo $_single_item['attrs']['container'] ?>>
    <div class="uk-grid uk-padding-v" uk-grid>
        <div class="uk-width-expand uk-article">

            <?php
                /**
                 * Fires before displaying single post header.
                 *
                 * @param  array   $_single_item
                 */
                do_action('ol.apollon.single_post_default_header_before', $_single_item);
            ?>

            <header <?php echo $_single_item['attrs']['header'] ?>>
                <div class="uk-article">
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
                    do_action('ol.apollon.single_post_default_thumbnail_before', $_single_item);


                    /**
                     * Override single post thumbnail.
                     *
                     * @param  string  $thumbnail
                     *
                     * @return string
                     */
                    echo apply_filters('ol.apollon.single_post_default_thumbnail', $_single_item['html']['thumbnail']);


                    /**
                     * Fires after displaying single post thumbnail.
                     *
                     * @param  array   $_single_item
                     */
                    do_action('ol.apollon.single_post_default_thumbnail_after', $_single_item);

                    // Excerpt
                    echo $_single_item['html']['excerpt'];
                ?>
            </header>

            <?php
                /**
                 * Fires after displaying single post header.
                 *
                 * @param  array   $_single_item
                 */
                do_action('ol.apollon.single_post_default_header_after', $_single_item);
            ?>

            <main <?php echo $_single_item['attrs']['main'] ?>>
                <?php
                    /**
                     * Fires before displaying single post content.
                     *
                     * @param  array   $_single_item
                     */
                    do_action('ol.apollon.single_post_default_content_before', $_single_item);

                    the_content();


                    /**
                     * Fires after displaying single post content.
                     *
                     * @param  array   $_single_item
                     */
                    do_action('ol.apollon.single_post_default_content_after', $_single_item);

                ?>
            </main>

            <?php
                /**
                 * Fires before displaying single post footer.
                 *
                 * @param  array   $_single_item
                 */
                do_action('ol.apollon.single_post_default_footer_before', $_single_item);
            ?>

            <footer <?php echo $_single_item['attrs']['footer'] ?>>
                <?php
                    $_inc = [
                        'filename' => 'comments.php',
                        'part'     => true,
                        'vars'     => [
                            'args'     => $_single_item,
                            'template' => 'default',
                        ],
                    ];

                    include OL_APOLLON_VIEWSPATH.'_inc.php';
                ?>
            </footer>

            <?php
                /**
                 * Fires after displaying single post footer.
                 *
                 * @param  array   $_single_item
                 */
                do_action('ol.apollon.single_post_default_footer_after', $_single_item);
            ?>
        </div>

        <?php
            /**
             * Fires before displaying single post sidebar.
             *
             * @param  array   $_single_item
             */
            do_action('ol.apollon.single_post_default_sidebar_before', $_single_item);
        ?>

        <aside <?php echo $_single_item['attrs']['sidebar'] ?>>
            <?php
                $_inc = [
                    'filename' => 'sidebar.php',
                    'part'     => true,
                    'vars'     => [
                        'template' => 'single-post',
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            ?>
        </aside>

        <?php
            /**
             * Fires after displaying single post sidebar.
             *
             * @param  array   $_single_item
             */
            do_action('ol.apollon.single_post_default_sidebar_after', $_single_item);
        ?>

    </div>
</article>

<?php


/**
 * Fires after displaying single post container.
 *
 * @param  array   $_single_item
 */
do_action('ol.apollon.single_post_default_container_after', $_single_item);
