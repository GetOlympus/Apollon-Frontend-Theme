<?php

/**
 * Video game
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

echo '<div class="flexy-wrapper">'.getEmbedContent($_post['extra']['video']).'</div>';
