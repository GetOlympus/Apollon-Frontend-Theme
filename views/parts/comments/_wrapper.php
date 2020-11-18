<?php

/**
 * Comments _wrapper part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_comments)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build format data.
 *
 * @param  array   $data
 *
 * @return array
 */
$_comments_item = apply_filters('ol.apollon.comments_build_data', array_merge($_comments, [
    'post'      => $post,
    'user'      => $user_identity,
]));


/**
 * Fires before displaying wrapper comments.
 *
 * @param  array   $_comments_item
 */
do_action('ol.apollon.comments_wrapper_before', $_comments_item);

?>

<hr class="uk-divider-icon">

<aside class="comments">
    <?php if ($_comments_item['commenttitle']) : ?>
        <?php comments_number(
            esc_html__('No Comments', OL_APOLLON_DICTIONARY),
            esc_html__('One Comment', OL_APOLLON_DICTIONARY),
            esc_html(_n('% Comment', '% Comments', get_comments_number(), OL_APOLLON_DICTIONARY))
        ) ?>

        <hr class="uk-divider-small"/>
    <?php endif ?>

    <?php if ('top' === $_comments_item['formposition']) : ?>
        <?php if ($_comments_item['open']) : ?>
            <?php comment_form($_comments_item['opts']) ?>
        <?php else : ?>
            <?php echo $_comments_item['opts']['fields']['closed'] ?>
        <?php endif ?>

        <hr class="uk-divider-small"/>
    <?php endif ?>

    <?php if (!$_comments_item['comments']['count']) : ?>
        <div class="comments-heading">
            <?php echo $_comments_item['labels']['leave'] ?>
        </div>
    <?php else : ?>
        <div class="comments-heading">
            <?php echo $_comments_item['labels']['count'] ?>
        </div>

        <hr class="uk-divider-small"/>

        <?php if ('top' === $_comments_item['navsposition'] && 1 < $_comments_item['comments']['pages']) : ?>
            <ul class="uk-pagination uk-flex-center" uk-margin>
                <li><?php previous_comments_link($_comments_item['labels']['prev_page']) ?></li>
                <li><?php next_comments_link($_comments_item['labels']['next_page']) ?></li>
            </ul>

            <hr class="uk-divider-small"/>
        <?php endif ?>

        <ul class="uk-comment-list">
            <?php
                wp_list_comments([
                    'callback'      => 'custom_comment_list_open',
                    'end-callback'  => 'custom_comment_list_close',
                    'style'         => 'ul'
                ], $_comments_item['comments']['list']);
            ?>
        </ul>

        <?php if ('bottom' === $_comments_item['navsposition'] && 1 < $_comments_item['comments']['pages']) : ?>
            <hr class="uk-divider-small"/>

            <ul class="uk-pagination uk-flex-center" uk-margin>
                <li><?php previous_comments_link($_comments_item['labels']['prev_page']) ?></li>
                <li><?php next_comments_link($_comments_item['labels']['next_page']) ?></li>
            </ul>
        <?php endif ?>
    <?php endif ?>

    <?php if ('bottom' === $_comments_item['formposition']) : ?>
        <?php if ($_comments_item['open']) : ?>
            <?php comment_form($_comments_item['opts']) ?>
        <?php else : ?>
            <?php echo $_comments_item['opts']['fields']['closed'] ?>
        <?php endif ?>
    <?php endif ?>
</aside>

<?php


/**
 * Fires after displaying wrapper comments.
 *
 * @param  array   $_comments_item
 */
do_action('ol.apollon.comments_wrapper_after', $_comments_item);

// Freedom
unset($_comments_item);
