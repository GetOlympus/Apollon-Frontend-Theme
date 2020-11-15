<?php

namespace ApollonFrontendTheme\Src\Sections;

class ApollonCustomSection extends \GetOlympus\Zeus\Section\Section
{
    /**
     * @var string
     */
    public $link_style = '';

    /**
     * @var string
     */
    public $description_style = '';

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
    protected function render_template()
    {
        ?>
        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
            <h3 class="accordion-section-title" {{{ data.section_style }}}>
                <# if (data.url) { #>
                    <a href="{{{ data.url }}}" target="_blank" {{{ data.link_style }}}>{{ data.title }}</a>
                <# } else { #>
                    <span {{{ data.title_style }}}>{{ data.title }}</span>
                <# } #>

                <# if (data.description) { #>
                    <small class="customize-control-description" {{{ data.description_style }}}>{{{ data.description }}}</small>
                <# } #>
            </h3>
        </li>
        <?php
    }

    /**
     * JSON
     */
    public function json()
    {
        $json = parent::json();

        $json['description_style'] = empty($this->description_style) ? '' : 'style="'.$this->description_style.'"';
        $json['link_style']        = empty($this->link_style) ? '' : 'style="'.$this->link_style.'"';
        $json['section_style']     = empty($this->section_style) ? '' : 'style="'.$this->section_style.'"';
        $json['title_style']       = empty($this->title_style) ? '' : 'style="'.$this->title_style.'"';
        $json['url']               = esc_url($this->url);

        return $json;
    }
}
