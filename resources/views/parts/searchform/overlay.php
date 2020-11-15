<?php

/**
 * Searchform overlay part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_searchform)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying overlay searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_overlay_before', $_searchform);

?>

<div class="uk-navbar-item <?php echo $_searchform['args']['navbarcss'] ?>">
    <a href="#" class="uk-navbar-toggle" uk-search-icon uk-toggle="target:.nav-overlay; animation:uk-animation-fade"></a>
</div>

<?php


/**
 * Fires after displaying overlay searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_overlay_after', $_searchform);
