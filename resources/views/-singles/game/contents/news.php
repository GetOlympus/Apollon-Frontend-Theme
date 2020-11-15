<?php

/**
 * Content news
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Check matchs
if (!$matchs->have_posts()) {
    return;
}

$excerpt = 50;
$formats = getPostTypes('no-post');

?>

<div class="l-loop ui cards">
    <?php
        $temp = $_post;

        // Unset post array
        if (isset($_post)) {
            unset($_post);
        }

        while ($matchs->have_posts()) {
            $matchs->the_post();

            // Works ID
            $id = get_the_ID();

            // Works on post type
            $type = get_post_type();

            // Works on formats
            if (in_array($type, $formats)) {
                $format = $type;
                $cover = 'rvs-default';
            } else {
                $format = get_post_format() ? : 'standard';
                $format = in_array($format, ['image']) ? $format : 'standard';
                $cover = in_array($format, ['image']) ? 'rvs-cover-big' : 'rvs-default';
            }

            // Display post
            include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.$format.'.php';
        }

        unset($_post);
        unset($matchs);
        unset($id);
        unset($type);
        unset($format);
        unset($formats);
        unset($excerpt);
        unset($cover);

        $_post = $temp;
        unset($temp);
    ?>
</div>
