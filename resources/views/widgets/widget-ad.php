<?php

/**
 * Ad widget
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$adcontent = get_post_meta($ad->ID, 'ad-code', true);

?>

<aside class="d-mezz d-post_sidebar">
    <?php echo $adcontent['code'] ?>
</aside>

<?php

unset($adcontent);
