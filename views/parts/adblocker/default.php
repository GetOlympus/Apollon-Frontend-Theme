<?php

/**
 * Adblocker default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_adblocker)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_default_before', $_adblocker);

?>

<aside id="ECMibnRmsOKB" class="ui modal blocking">
    <div class="sp_iframe_container1577274915599">
        <iframe src="https://d1sga4e4j5xr2k.cloudfront.net/2/?lang=fr"></iframe>
    </div>
</aside>

<?php


/**
 * Fires after displaying default adblocker.
 *
 * @param  array   $_adblocker
 */
do_action('ol.apollon.adblocker_part_default_after', $_adblocker);
