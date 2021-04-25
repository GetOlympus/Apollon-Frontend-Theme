<?php

namespace ApollonFrontendTheme\Src\Controls;

class ApollonHeaderControl extends \GetOlympus\Zeus\Control\Control
{
    /**
     * @var string
     */
    public $class = 'customize-section-title';

    /**
     * @var string
     */
    public $style = '';

    /**
     * @var string
     */
    public $type = 'apollon-header';

    /**
     * An Underscore (JS) template for this control's content (but not its container).
     */
    protected function content_template() // phpcs:ignore
    {
        ?>
        <h3 class="{{ data.class }}" {{{ data.style }}}>{{{ data.label }}}</h3>
        <div class="description">{{{ data.description }}}</div>
        <?php
    }

    /**
     * JSON
     */
    public function json() // phpcs:ignore
    {
        $json = parent::json();

        $default  = 'background:transparent;border-bottom:0;font-family:\'Helvetica Neue\',Arial,sans-serif;';
        $default .= 'font-size:12px;font-weight:600;line-height:18px;padding:30px 0 0;text-transform:uppercase;';

        $json['class'] = $this->class;
        $json['style'] = ' style="'.(empty($this->style) ? $default : $this->style).'"';

        return $json;
    }
}
