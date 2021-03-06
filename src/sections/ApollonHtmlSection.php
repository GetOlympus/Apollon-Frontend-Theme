<?php

namespace ApollonFrontendTheme\Src\Sections;

class ApollonHtmlSection extends \GetOlympus\Zeus\Section\Section
{
    /**
     * @var string
     */
    public $html = '';

    /**
     * @var string
     */
    public $type = 'apollon-html';

    /**
     * Render template.
     */
    protected function render_template()
    {
        $css = 'accordion-section control-section control-section-{{ data.type }} cannot-expand';

        ?>
        <li id="accordion-section-{{ data.id }}" class="<?php echo $css ?>" title="{{{ data.title }}}">
            {{{ data.html }}}
        </li>
        <?php
    }

    /**
     * JSON
     */
    public function json()
    {
        $json = parent::json();

        $json['html'] = esc_html($this->html);

        return $json;
    }
}
