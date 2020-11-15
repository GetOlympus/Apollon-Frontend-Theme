<?php

/**
 * Featured product or category product widget
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

/* Build vars
$_mea = [
    'title'         => '',
    'esc_title'     => '',
    'description'   => '',
    'image'         => '',
    'more'          => '',
    'link'          => '',
    'color'         => 'black'|'white'
];
*/

?>

<div class="w-featured <?php echo $_mea['color'] ?>" role="product" style="background-image:url(<?php echo $_mea['image'] ?>)">
    <a href="<?php echo $_mea['link'] ?>" title="<?php echo $_mea['esc_title'] ?>" class="thumb"></a>

    <h2>
        <a href="<?php echo $_mea['link'] ?>" title="<?php echo $_mea['esc_title'] ?>">
            <?php echo $_mea['title'] ?>
        </a>
    </h2>

    <p><?php echo $_mea['description'] ?></p>

    <?php if (!empty($_mea['description'])) : ?>
        <a href="<?php echo $_mea['link'] ?>" class="item large ui main icon button right">
            <span><?php echo $_mea['more'] ?></span>
        </a>
    <?php endif ?>
</div>

<?php

unset($_mea);
