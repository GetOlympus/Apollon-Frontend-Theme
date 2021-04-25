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
    protected function render_template() // phpcs:ignore
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
    public function json() // phpcs:ignore
    {
        $json = parent::json();

        $json['html'] = esc_html($this->html);

        return $json;
    }
}
