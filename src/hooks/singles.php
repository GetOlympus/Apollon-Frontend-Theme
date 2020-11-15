<?php

/**
 * Apollon singles hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// SINGLES

add_filter('ol.apollon.single_post_display', function ($tpl) {
    return $tpl;
});
