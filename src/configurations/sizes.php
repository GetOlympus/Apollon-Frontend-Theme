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
    'cover'    => [500, 500, true, __('apollon.cf.sizes.cover', OL_APOLLON_DICTIONARY)],
    'featured' => [1100, 673, true, __('apollon.cf.sizes.featured', OL_APOLLON_DICTIONARY)],
];
