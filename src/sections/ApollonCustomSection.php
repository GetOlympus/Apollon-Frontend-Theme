<?php

namespace ApollonFrontendTheme\Src\Sections;

class ApollonCustomSection extends \GetOlympus\Zeus\Section\Section
{
    /**
     * @var string
     */
    public $description_style = '';

    /**
     * @var string
     */
    public $icon = '';

    /**
     * @var string
     */
    public $link_style = '';

    /**
     * @var string
     */
    public $section_style = '';

    /**
     * @var string
     */
    public $title_style = '';

    /**
     * @var string
     */
    public $type = 'apollon-custom';

    /**
     * @var string
     */
    public $url = '';

    /**
     * Render template.
     */
    protected function render_template() // phpcs:ignore
    {
        $css = 'accordion-section control-section control-section-{{ data.type }} cannot-expand';

        ?>
        <li id="accordion-section-{{ data.id }}" class="<?php echo $css ?>">
            <h3 class="accordion-section-title" {{{ data.section_style }}}>
                <# if (data.url) { #>
                    <a href="{{{ data.url }}}" target="_blank" {{{ data.link_style }}}>
                        {{ data.title }}{{{ data.icon }}}
                    </a>
                <# } else { #>
                    <span {{{ data.title_style }}}>
                        {{ data.title }}{{{ data.icon }}}
                    </span>
                <# } #>

                <# if (data.description) { #>
                    <small class="customize-control-description" {{{ data.description_style }}}>
                        {{{ data.description }}}
                    </small>
                <# } #>
            </h3>
        </li>
        <?php
    }

    /**
     * JSON
     */
    public function json() // phpcs:ignore
    {
        $json = parent::json();

        $default  = 'background:transparent;border-width:0 0 1px;font-family:\'Helvetica Neue\',Arial,sans-serif;';
        $default .= 'font-weight:600;line-height:18px;padding:30px 10px 10px 16px;text-transform:uppercase;';

        $json['description_style'] = empty($this->description_style) ? '' : 'style="'.$this->description_style.'"';
        $json['icon']              = empty($this->icon) ? '' : ' <span class="'.$this->icon.'"></span>';
        $json['link_style']        = empty($this->link_style) ? '' : 'style="'.$this->link_style.'"';
        $json['section_style']     = 'style="'.(empty($this->section_style) ? $default : $this->section_style).'"';
        $json['title_style']       = empty($this->title_style) ? '' : 'style="'.$this->title_style.'"';
        $json['url']               = esc_url($this->url);

        return $json;
    }
}
