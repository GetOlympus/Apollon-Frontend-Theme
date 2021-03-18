<?php

/**
 * Loop header default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}

// Check title
if (empty($_loop['title'])) {
    return;
}


/**
 * Fires before displaying header default loop.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.loop_header_default_before', $_loop);

?>

<!-- title -->
<header class="uk-section uk-section-default uk-padding-remove-bottom" uk-height-viewport="expand:true">
    <div class="uk-container">
        <h3 class="uk-h2 uk-text-center">
            <?php echo $_loop['meta'] ?>
            <?php echo $_loop['title'] ?>
        </h3>
    </div>
</header>

<?php


/**
 * Fires after displaying header default loop.
 *
 * @param  array   $_loop
 */
do_action('ol.apollon.loop_header_default_after', $_loop);
