<?php

/**
 * Page part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_page)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build page data.
 *
 * @param  array   $data
 *
 * @return array
 */
$_page_item = apply_filters('ol.apollon.page_build_data', [
    'labels' => [
        'by' => __('by', OL_APOLLON_LANGUAGESPATH),
        'on' => __('on', OL_APOLLON_LANGUAGESPATH),
    ],
]);


/**
 * Build attributes.
 * @see hook ol.apollon.build_attrs
 */
$_page_item['attrs'] = apply_filters('ol.apollon.build_attrs', [
    'container' => [
        'class'   => 'uk-container uk-margin-large-top',
    ],
    'header'    => [
        'class'   => 'uk-flex-middle uk-grid uk-padding',
        'uk-grid' => false,
        'style'   => 'background:linear-gradient(90deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 45%,rgba(233,162,188,.1) 45%,rgba(233,162,188,.1) 45%);',
    ],
    'thumbnail' => [
        'class'   => 'uk-width-3-5@m uk-flex-first uk-padding-small uk-image',
    ],
    'main'      => [
        'class'   => 'uk-section uk-margin-top',
    ],
    'footer'    => [
        'class'   => 'uk-section uk-section-xsmall',
    ],
]);


/**
 * Override page default content html.
 *
 * @param  array   $_html
 * @param  array   $_page_item
 *
 * @return array
 */
$_page_item['html'] = apply_filters('ol.apollon.page_default_content_html', [
    /*'categories' => empty($_page_item['categories']) ? '' : sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-uppercase',
        $_page_item['categories']
    ),
    'excerpt'    => sprintf(
        __('<p class="%s">%s</p>', OL_APOLLON_LANGUAGESPATH),
        'uk-text-meta uk-text-large uk-dropcap',
        $_page_item['excerpt']
    ),
    'meta'       => sprintf(
        __('<small>%s, %s</small>', OL_APOLLON_LANGUAGESPATH),
        sprintf(
            __('<img src="%s" alt="%s" width="%d"/> %s <a href="%s">%s</a>', OL_APOLLON_LANGUAGESPATH),
            $_page_item['author']['avatar']['full']['url'],
            esc_attr($_page_item['author']['name']),
            $_page_item['author']['avatar']['full']['width'],
            $_page_item['labels']['by'],
            $_page_item['author']['link'],
            $_page_item['author']['name']
        ),
        sprintf(
            __('%s <time datetime="%s">%s</time>', OL_APOLLON_LANGUAGESPATH),
            $_page_item['labels']['on'],
            $_page_item['dates']['c'],
            $_page_item['dates']['long']
        )
    ),
    'thumbnail'  => empty($_page_item['images']) ? '' : sprintf(
        __('<figure %s>%s</figure>', OL_APOLLON_LANGUAGESPATH),
        $_page_item['attrs']['thumbnail'],
        $_page_item['images']['original']
    ),*/
    'title'      => sprintf(
        __('<h1 class="%s">%s</h1>', OL_APOLLON_LANGUAGESPATH),
        'uk-article-title uk-margin-small-top',
        $_page_item['title']
    ),
], $_page_item);


/**
 * Override page default content order.
 *
 * @param  array   $order
 *
 * @return array
 */
$_page_item['order'] = apply_filters('ol.apollon.page_default_content_order', [
    $_page_item['html']['title'],
    //$_page_item['html']['meta'],
    //$_page_item['html']['categories'],
]);


/**
 * Fires before displaying default page container.
 *
 * @param  array   $_page_item
 */
do_action('ol.apollon.page_default_container_before', $_page_item);

?>

<article <?php echo $_page_item['attrs']['container'] ?>>
    <?php
        /**
         * Fires before displaying default page header.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_default_header_before', $_page_item);
    ?>

    <header <?php echo $_page_item['attrs']['header'] ?>>
        <div class="uk-width-expand uk-article">
            <?php foreach ($_page_item['order'] as $item) : ?>
                <?php echo $item ?>
            <?php endforeach ?>
        </div>
    </header>

    <?php
        /**
         * Fires after displaying default page header.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_default_header_after', $_page_item);
    ?>

    <main <?php echo $_page_item['attrs']['main'] ?>>
        <div class="uk-container uk-container-small">
            <main class="uk-article uk-margin-top">
                <?php
                    /**
                     * Fires before displaying default page content.
                     *
                     * @param  array   $_page_item
                     */
                    do_action('ol.apollon.page_default_content_before', $_page_item);

                    the_content();


                    /**
                     * Fires after displaying default page content.
                     *
                     * @param  array   $_page_item
                     */
                    do_action('ol.apollon.page_default_content_after', $_page_item);

                ?>
            </main>
        </div>
    </main>

    <?php
        /**
         * Fires before displaying default page footer.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_default_footer_before', $_page_item);
    ?>

    <footer <?php echo $_page_item['attrs']['footer'] ?>>
        <div class="uk-container uk-container-small">
            <?php
                $_inc = [
                    'filename' => 'comments.php',
                    'part'     => true,
                    'vars'     => [
                        'args'     => $_page_item,
                        'template' => 'default',
                    ],
                ];

                include OL_APOLLON_VIEWSPATH.'_inc.php';
            ?>
        </div>
    </footer>

    <?php
        /**
         * Fires after displaying default page footer.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_default_footer_after', $_page_item);
    ?>
</article>

<?php


/**
 * Fires after displaying default page container.
 *
 * @param  array   $_page_item
 */
do_action('ol.apollon.page_default_container_after', $_page_item);

// Freedom
unset($_page_item);
