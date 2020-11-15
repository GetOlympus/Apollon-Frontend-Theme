<?php

/**
 * Editorial game
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

?>

    <header class="p-header">
        <?php edit_post_link(__('Edit'), '', '') ?>
        <h1 class="p-title header"><?php echo $_post['title'] ?></h1>
        <?php echo getAuthor($_post['author'], $_post['date']) ?>
    </header>

    <?php if ($_post['has_thumb'] && !empty($_post['image'])): ?>
        <figure class="p-thumbnail ui image" role="img">
            <?php echo $_post['image'] ?>
        </figure>
    <?php endif ?>

    <p class="p-excerpt">
        <?php echo $_post['excerpt'] ?>
    </p>

    <?php if (!empty($_post['extra']['content'])) : ?>
        <main class="p-content">
            <?php echo apply_filters('the_content', $_post['extra']['content']) ?>
        </main>
    <?php endif ?>
