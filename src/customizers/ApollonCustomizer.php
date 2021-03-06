<?php

namespace ApollonFrontendTheme\Src\Customizers;

/**
 * Apollon main customizer
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

class ApollonCustomizer extends \GetOlympus\Zeus\Customizer\Customizer
{
    /**
     * @var array
     */
    protected $contents = [
        'control_subtitle' => [
            'type'        => 'apollon-header',
            'style'       => 'background:#f9f9fc;font-size:14px;line-height:16px',
            '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonHeaderControl',
        ],
        'control_title'    => [
            'type'        => 'apollon-header',
            'style'       => 'margin-top:30px',
            '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonHeaderControl',
        ],
        'section_title'    => [
            'type'              => 'apollon-custom',
            'description_style' => 'font-weight:200;margin:0',
            'section_style'     => 'background:transparent;border-width:0 0 1px;padding:30px 10px 10px 16px',
            '_classname'        => 'ApollonFrontendTheme\\Src\\Sections\\ApollonCustomSection',
        ],
    ];

    /**
     * @var string
     */
    protected $preview = OL_APOLLON_SRCPATH.'customizers'.S.'apollon-customizer.js';

    /**
     * Prepare variables.
     */
    protected function setVars() : void
    {
        // Define extra usefull ocntents
        $this->contents['posttypes']      = get_post_types();
        $this->contents['posts_per_page'] = get_option('posts_per_page');
        $this->contents['sidebars']       = $GLOBALS['wp_registered_sidebars'];
        $this->contents['navs_contents']  = [
            ''        => __('apollon._.contents.none', OL_APOLLON_DICTIONARY),
            'logo'    => __('apollon._.contents.logo', OL_APOLLON_DICTIONARY),
            'custom'  => __('apollon._.contents.custom', OL_APOLLON_DICTIONARY),
            'menu'    => __('apollon._.contents.menu', OL_APOLLON_DICTIONARY),
            'search'  => __('apollon._.contents.search', OL_APOLLON_DICTIONARY),
            'sidebar' => __('apollon._.contents.sidebar', OL_APOLLON_DICTIONARY),
        ];

        // Get PHPs
        $phps = [
            'apollon.php',
            'general.php',
            'features.php',
            'header.php',
            'layouts.php',
            'footer.php',
        ];

        // Main PHP resources path
        $path = OL_APOLLON_RESOURCESPATH.'customizers'.S;

        // Iterate on all PHPs
        foreach ($phps as $php) {
            // Check file
            if (!file_exists($file = realpath($path.$php))) {
                continue;
            }

            // Build contents
            $panels = include $file;

            // Check panels
            if (empty($panels)) {
                continue;
            }

            // Add panels
            $this->customAddPanels($panels);
        }

        /**
         * Fires after registering contents through customizer.
         */
        add_action('ol.zeus.customizerhook_register_after', function ($wp_customize, $customizer) {
            $hp = 'lt-homepage';
            $st = 'static_front_page';

            // Move default homepage controls to Apollon
            $wp_customize->get_section($hp)->description = $wp_customize->get_section($st)->description;
            $wp_customize->get_control('show_on_front')->section = 'lt-homepage';
            $wp_customize->remove_section($st);

            // Add logo definition into title tagline section
            $wp_customize->get_control('logos_default')->section = 'title_tagline';
            $wp_customize->get_control('logos_retina')->section = 'title_tagline';
        }, 10, 2);
    }

    /**
     * Add panels.
     *
     * @param  array
     *
     * @return void
     */
    protected function customAddPanels($panels) : void
    {
        if (empty($panels)) {
            return;
        }

        foreach ($panels as $panelid => $panel) {
            if (isset($panel['_classname'])) {
                $this->customAddSections([$panelid => $panel], '');
                continue;
            }

            // Add panel
            $this->addPanel($panelid, $panel);

            // Add sections if needed
            if (isset($panel['sections'])) {
                $this->customAddSections($panel['sections'], $panelid);
            }

            // Add controls if needed
            if (isset($panel['controls'])) {
                $this->customAddControls($panel['controls'], $panelid);
            }
        }
    }

    /**
     * Add sections.
     *
     * @param  array
     * @param  integer
     *
     * @return void
     */
    protected function customAddSections($sections, $panelid) : void
    {
        if (empty($sections)) {
            return;
        }

        foreach ($sections as $sectionid => $section) {
            $classname = isset($section['_classname']) ? $section['_classname'] : '';

            // Add panel
            if (!empty($panelid)) {
                $section['panel'] = $panelid;
            }

            // Add section
            $this->addSection($sectionid, $section, $classname);

            // Add sections if needed
            if (isset($section['sections'])) {
                $this->customAddSections($section['sections'], $sectionid);
            }

            // Add controls
            if (isset($section['controls'])) {
                $this->customAddControls($section['controls'], $sectionid);
            }
        }
    }

    /**
     * Add settings.
     *
     * @param  array
     * @param  integer
     *
     * @return mixed
     */
    protected function customAddSettings($settings, $controlid)
    {
        if (empty($settings)) {
            return [];
        }

        $sep = '-';
        $return = [];
        $count = count($settings);

        // Build settings
        foreach ($settings as $settingid => $setting) {
            $settingid = is_string($settingid)
                ? $settingid
                : (1 === $count ? $controlid : $controlid.$sep.$settingid);

            // Add setting
            $this->addSetting($settingid, $setting);

            // Update returns
            $return[$settingid] = $settingid;
        }

        return 1 === count($return) ? $settingid : $return;
    }

    /**
     * Add controls.
     *
     * @param  array
     * @param  integer
     *
     * @return void
     */
    protected function customAddControls($controls, $parentid) : void
    {
        if (empty($controls)) {
            return;
        }

        foreach ($controls as $controlid => $control) {
            $classname = '';

            // Add custom classname
            if (isset($control['_classname'])) {
                $classname = $control['_classname'];
                unset($control['_classname']);
            }

            // Add section
            $control['section'] = $parentid;

            // Add settings
            $settings = isset($control['settings']) ? $this->customAddSettings($control['settings'], $controlid) : [];
            $control['settings'] = $settings;

            // Add control
            $this->addControl($controlid, $control, $classname);
        }
    }
}
