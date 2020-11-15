<?php

/**
 * Comments default part
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
$_comments_item = apply_filters('ol.apollon.comments_build_data', array_merge([
    'htmltags' => false,
], $_comments));


/**
 * Fires before displaying default comments.
 *
 * @param  array   $_comments_item
 */
do_action('ol.apollon.comments_default_before', $_comments_item);

?>

<hr class="uk-divider-icon">

<aside class="comments">
    <?php if ($_comments_item['comments']['count']) : ?>
        <div class="comments-heading">
            <?php
                if (!$_comments_item['comments']['count']) {
                    _e('Leave a comment', OL_APOLLON_DICTIONARY);
                } else if (1 === $_comments_item['comments']['count']) {
                    printf(
                        _x('One reply on &ldquo;%s&rdquo;', 'comments title', OL_APOLLON_DICTIONARY),
                        $_comments_item['args']['title']
                    );
                } else {
                    printf(
                        _nx(
                            '%1$s reply on &ldquo;%2$s&rdquo;',
                            '%1$s replies on &ldquo;%2$s&rdquo;',
                            $_comments_item['comments']['count'],
                            'comments title',
                            OL_APOLLON_DICTIONARY
                        ),
                        number_format_i18n($_comments_item['comments']['count']),
                        $_comments_item['args']['title']
                    );
                }
            ?>
        </div>

        <hr class="uk-divider-small">
    <?php endif ?>

    <?php if ($_comments_item['comments']['count']) : ?>
        <ul class="uk-comment-list">
            <?php
                wp_list_comments([
                    'callback'      => 'custom_comment_list_open',
                    'end-callback'  => 'custom_comment_list_close',
                    'style'         => 'ul'
                ], $_comments_item['comments']['list']);
            ?>
        </ul>

        <?php
            $page_comments = paginate_comments_links([
                'echo'      => false,
                'end_size'  => 0,
                'mid_size'  => 0,
                'next_text' => __('Newer Comments', OL_APOLLON_DICTIONARY) . ' <span aria-hidden="true">&rarr;</span>',
                'prev_text' => '<span aria-hidden="true">&larr;</span> ' . __('Older Comments', OL_APOLLON_DICTIONARY),
            ]);
        ?>

        <?php if ($page_comments) : ?>
            <?php $page_css = false === strpos($page_comments, 'prev page-numbers') ? ' only-next' : '' ?>
            <nav class="comments-pagination pagination<?php echo $page_css ?>" aria-label="<?php esc_attr_e('Comments', OL_APOLLON_DICTIONARY) ?>">
                <?php echo wp_kses_post($page_comments) ?>
            </nav>
        <?php endif ?>

        <hr class="uk-divider-small">
    <?php endif ?>

    <div class="uk-comment-list">
        <?php if ($_comments_item['open']) : ?>
            <?php comment_form($_comments_item['opts']) ?>

            <?php /*if (1 < get_comment_pages_count() && get_option('page_comments')): ?>
                <nav class="ui menu">
                    <?php next_comments_link(__('<b><i class="left arrow icon"></i> Commentaires suivants</b>', OL_APOLLON_DICTIONARY)) ?>

                    <div class="right menu">
                        <?php previous_comments_link(__('<b>Commentaires précédents <i class="right arrow icon"></i></b>', OL_APOLLON_DICTIONARY)) ?>
                    </div>
                </nav>
            <?php endif*/ ?>
        <?php else : ?>
            <div class="field"><?php echo __('Comments are closed.', OL_APOLLON_DICTIONARY) ?></div>
        <?php endif ?>
    </div>
</aside>

<?php


/**
 * Fires after displaying default comments.
 *
 * @param  array   $_comments_item
 */
do_action('ol.apollon.comments_default_after', $_comments_item);

// Freedom
unset($_comments_item);
