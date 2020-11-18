<?php

/**
 * Front page part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_page)) {
    die('You are not authorized to directly access to this page');
}

$_page_item = $_page;


/**
 * Build attributes.
 * @see hook ol.apollon.build_attrs
 */
$_page_item['attrs'] = apply_filters('ol.apollon.build_attrs', [
    'container' => [
        'class'   => 'uk-container uk-margin-large-top',
    ],
]);


/**
 * Fires before displaying front page container.
 *
 * @param  array   $_page_item
 */
do_action('ol.apollon.page_front_container_before', $_page_item);

?>

<article <?php echo $_page_item['attrs']['container'] ?>>
    <?php
        /**
         * Fires before displaying front page content.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_front_content_before', $_page_item);

        the_content();


        /**
         * Fires after displaying front page content.
         *
         * @param  array   $_page_item
         */
        do_action('ol.apollon.page_front_content_after', $_page_item);
    ?>
</article>

<?php

/**
 * Fires after displaying front page container.
 *
 * @param  array   $_page_item
 */
do_action('ol.apollon.page_front_container_after', $_page_item);

// Freedom
unset($_page_item);
