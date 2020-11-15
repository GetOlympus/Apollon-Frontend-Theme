<?php

/**
 * Page function
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_page)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build page data.
 *
 * @param  array   $data
 *
 * @return array
 */
add_filter('ol.apollon.page_build_data', function ($data = []) {
    // Build defaults data
    $data = array_merge([
        'id'        => get_the_ID(),

        'link'       => get_permalink(),
        'title'      => get_the_title(),
        'date'       => 'j.m.Y - H:i',
        'dates'      => [],
    ], $data);


    // Build details
    $data['esc_title'] = esc_html($data['title']);
    $data['esc_link']  = urlencode($data['link']);


    // Build dates
    $data['dates'] = [
        'c'     => get_the_date('c'),
        'long'  => get_the_date($data['date']),
    ];


    return $data;
});
