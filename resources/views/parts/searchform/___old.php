<form method="get" id="s-form" action="<?php echo OL_BLOG_HOME_URL_ESCAPED ?>" class="s-search ui centered grid mfp-hide">
    <div class="row">
        <div class="fifteen wide column center aligned">
            <input type="search" class="f-field" name="s" id="s" value="<?php the_search_query() ?>" placeholder="<?php echo __('Recherche', OL_APOLLON_DICTIONARY) ?>" />
            <button type="submit"><i class="search icon"></i></button>
        </div>

        <?php
            $tags = get_tags([
                'number' => 10,
                'orderby' => 'count',
                'order' => 'DESC',
            ]);

            $cats = wp_list_categories([
                'echo' => false,
                'number' => 10,
                'orderby' => 'count',
                'order' => 'DESC',
                'style' => '',
                'title_li' => '',
            ]);
        ?>
        <div class="fifteen wide tablet five wide computer column">
            <?php if (!empty($tags)) : ?>
                <?php
                    $tag_echo = '';

                    foreach ($tags as $tag) {
                        $tag_echo .= '<a href="' . get_tag_link($tag->term_id) . '" title="' . $tag->name . '">' . $tag->name . ' <b>(' . $tag->count . ')</b></a>';
                    }
                ?>

                <h4 class="s-title"><?php _e('Nos mots-clés populaires', OL_APOLLON_DICTIONARY) ?></h4>
                <?php echo $tag_echo ?>
            <?php endif ?>
        </div>

        <div class="fifteen wide tablet five wide computer column">
            <h4 class="s-title"><?php _e('Nos catégories populaires', OL_APOLLON_DICTIONARY) ?></h4>
            <?php echo str_replace('<br />', '', $cats) ?>
        </div>
    </div>
</form>
