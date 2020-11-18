<?php

namespace ApollonFrontendTheme\Src\Controls;

class ApollonToggleControl extends \GetOlympus\Zeus\Control\Control
{
    /**
     * @var string
     */
    public $type = 'apollon-toggle';

    /**
     * An Underscore (JS) template for this control's content (but not its container).
     */
    protected function content_template() // phpcs:ignore
    {
        $input = sprintf(
            '<input type="checkbox" name="%s" id="%s" value="%s" %s%s />',
            '{{ data.id }}',
            '{{ data.id }}',
            '{{ data.value }}',
            '{{ data.link }}',
            '{{ data.checked }}',
        );

        $svg  = '<svg width="6" height="6" aria-hidden="true" role="img" focusable="false" ';
        $svg .= 'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 6" class="off"><path d="M3 1.5c.8 0 1.5.7 1.5 ';
        $svg .= '1.5S3.8 4.5 3 4.5 1.5 3.8 1.5 3 2.2 1.5 3 1.5M3 0C1.3 0 0 1.3 0 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3z">';
        $svg .= '</path></svg><svg width="2" height="6" aria-hidden="true" role="img" focusable="false" ';
        $svg .= 'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 6" class="on"><path d="M0 0h2v6H0z"></path></svg>';

        ?>
        <div class="zeus-field-toggle apollon-toggle">
            <div class="customize-control-title">
                <span class="toggle">
                    <?php echo $input ?>

                    <label for="{{ data.id }}">
                        <?php echo $svg ?>
                    </label>
                </span>

                {{{ data.label }}}
            </div>

            <# if (data.description) { #>
                <span class="customize-control-description">{{{ data.description }}}</span>
            <# } #>
        </div>
        <?php
    }

    /**
     * JSON
     */
    public function json() // phpcs:ignore
    {
        $json = parent::json();

        $json['checked'] = checked($this->value());
        $json['id']      = esc_html($this->id);
        $json['value']   = esc_attr($this->value());

        return $json;
    }
}
