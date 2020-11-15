<?php

/**
 * Ad post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Details
$_post = include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'_format.php';

// Custom
$_post['extra']['ad'] = get_post_meta($_post['id'], 'ad-code', true);

// Check code
if (empty($_post['extra']['ad']['code'])) {
    unset($_post);
    return;
}

// Size
$_post['extra']['size'] = get_post_meta($_post['id'], 'ad-size', true);
$_post['extra']['size'] = 'big' === $_post['extra']['size'] ? ' bg' : '';

?>

<article class="f-post f-mezz ui card<?php echo $_post['extra']['size'] ?>" role="article">
    <?php echo stripslashes($_post['extra']['ad']['code']) ?>
</article>

<?php

unset($_post);
