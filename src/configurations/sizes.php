<?php

/**
 * Add custom image sizes.
 *
 * @category PHP
 * @package  ApollonFrontendTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @since    0.0.1
 *
 * @see      http://codex.wordpress.org/Function_Reference/add_image_size/
 */

return [
    /**
     * @var     string      $key    The size name.
     * @param   int         $width  The image width.
     * @param   int         $height The image height.
     * @param   bool|array  $crop   Crop option. Since 3.9, define a crop position with an array.
     * @param   string      $name   Add to media selection dropdown ~~ Put an empty string if you do not want this ~~
     */
    //'size_key'    => [size_width,     size_height,    size_crop_or_not,   size_label_in_dropdown],
    'rvs-large'     => [1100, 673, true, __('Large featured image – 1100px width.', OL_APOLLON_DICTIONARY)],
    'rvs-cover-big' => [646, 380, true, __('Cover featured image – 646px width, 380px height.', OL_APOLLON_DICTIONARY)],
    'rvs-cover'     => [313, 380, true, __('Cover featured image – 313px width, 380px height.', OL_APOLLON_DICTIONARY)],
    'rvs-default'   => [313, 180, true, __('Default featured image – 313px width, 180px height.', OL_APOLLON_DICTIONARY)],
];
