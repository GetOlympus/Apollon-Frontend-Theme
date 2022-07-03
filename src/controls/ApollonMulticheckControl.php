<?php

namespace ApollonFrontendTheme\Src\Controls;

class ApollonMulticheckControl extends \GetOlympus\Zeus\Control\Control
{
    /**
     * @var array
     */
    public static $scripts = [
        'sortable' => [
            'src'       => __DIR__.S.'apollon-sortable.js',
            'deps'      => [],
            'ver'       => false,
            'in_footer' => true,
            'media'     => 'all',
        ]
    ];

    /**
     * @var string
     */
    public $type = 'apollon-multicheck';

    /**
     * @var bool
     */
    private $sortable = false;

    /**
     * Constructor
     */
    public function __construct($manager, $id, $args = [], $options = [])
    {
        parent::__construct($manager, $id, $args);

        // Check sortable option
        $this->sortable = isset($this->input_attrs['sortable']) && $this->input_attrs['sortable'];
    }

    /**
     * An Underscore (JS) template for this control's content (but not its container).
     */
    protected function content_template() // phpcs:ignore
    {
        ?>
        <div class="zeus-field-multicheck apollon-multicheck">
            <div class="customize-control-title">{{{ data.label }}}</div>

            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>

            <ul class="<# if (data.sortable) { #>menu-item-bar apollon-sortable<# } #>">
                <# _.each (data.value, function(choiceID) { #>
                    <li class="<# if (data.sortable) { #>menu-item-handle <# } #>apollon-handle">
                        <span class="item-title">
                            <span class="menu-item-title">
                                <input type="checkbox" value="{{ choiceID }}" checked />
                                {{{ data.choices[choiceID] }}}
                            </span>
                        </span>
                    </li>
                <# }); #>

                <# _.each (data.choices, function(choiceLabel, choiceID) { #>
                    <# if (Array.isArray(data.value) && -1 === data.value.indexOf(choiceID)) { #>
                        <li class="<# if (data.sortable) { #>menu-item-handle <# } #>apollon-handle">
                            <span class="item-title">
                                <span class="menu-item-title">
                                    <input type="checkbox" value="{{ choiceID }}" />
                                    {{{ data.choices[choiceID] }}}
                                </span>
                            </span>
                        </li>
                    <# } #>
                <# }); #>
            </ul>
        </div>
        <?php
    }

    /**
     * Render the control's content.
     */
    protected function render_content() // phpcs:ignore
    {
        // Do nothing
    }

    /**
     * JSON
     */
    public function to_json() // phpcs:ignore
    {
        parent::to_json();

        $this->json['default'] = $this->setting->default;

        if (isset($this->default)) {
            $this->json['default'] = $this->default;
        }

        $this->json['value']    = maybe_unserialize($this->value());
        $this->json['value']    = empty($this->json['value']) ? [] : $this->json['value'];
        $this->json['value']    = is_string($this->json['value']) ? [$this->json['value']] : $this->json['value'];

        $this->json['choices']  = $this->choices;
        $this->json['link']     = $this->get_link();
        $this->json['id']       = $this->id;
        $this->json['sortable'] = $this->sortable;
    }
}
