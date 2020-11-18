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

        $json['class'] = $this->class;
        $json['style'] = empty($this->style) ? '' : ' style="'.$this->style.'"';

        return $json;
    }
}
