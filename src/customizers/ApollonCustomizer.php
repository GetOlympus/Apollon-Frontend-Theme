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
            '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonHeaderControl',
        ],
        'control_title'    => [
            'type'       => 'apollon-header',
            'style'      => 'margin-top:30px',
            '_classname' => 'ApollonFrontendTheme\\Src\\Controls\\ApollonHeaderControl',
        ],
        'section_title'    => [
            'type'              => 'apollon-custom',
            'description_style' => 'font-weight:200;margin:0',
            '_classname'        => 'ApollonFrontendTheme\\Src\\Sections\\ApollonCustomSection',
        ],
    ];

    /**
     * @var string
     */
    protected $preview = __DIR__.S.'apollon-customizer.js';

    /**
     * Prepare variables.
     */
    protected function setVars() : void
    {
        // Post types
        $this->contents['posttypes']      = [];
        // Posts per page
        $this->contents['posts_per_page'] = get_option('posts_per_page');
        // List all sidebars
        $this->contents['sidebars']       = $GLOBALS['wp_registered_sidebars'];
        // Nav & section contents
        $this->contents['navs_contents']  = [
            ''          => __('apollon._.none', OL_APOLLON_DICTIONARY),
            'logo'      => __('apollon._.logo', OL_APOLLON_DICTIONARY),
            'copyright' => __('apollon._.copyright', OL_APOLLON_DICTIONARY),
            'custom'    => __('apollon._.custom', OL_APOLLON_DICTIONARY),
            'search'    => __('apollon._.search', OL_APOLLON_DICTIONARY),
            'sidebar'   => __('apollon._.sidebar', OL_APOLLON_DICTIONARY),
        ];

        // Get searchable post types only registered through `register_post_type` function
        $posttypes = get_post_types(['exclude_from_search' => false/*'public' => true, '_builtin' => false,*/]);
        $posttypes = array_diff($posttypes, [
            'attachment', 'media', 'nav_menu_item', 'customize_changeset',
            'revision', 'custom_css', 'oembed_cache', 'user_request', 'wp_block'
        ]);

        if ($posttypes) {
            foreach ($posttypes as $type) {
                $post = get_post_type_object($type);
                $this->contents['posttypes'][$post->name] = $post->labels->singular_name;
            }
        }

        // Get files
        $files = [
            'apollon.php',
            'design.php',
            'components.php',
            'features.php',
            'layout.php',
        ];

        // Main PHP resources path
        $path = __DIR__.S.'src'.S;

        // Initialize priority
        $priority = 0;

        // Iterate on all PHPs
        foreach ($files as $idx => $file) {
            // Check file
            if (!file_exists($file = realpath($path.$file))) {
                continue;
            }

            // Update priority
            $priority = (int) (($idx + 1) * 1000);

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
            // Add logo options into title tagline section
            foreach (['default', 'retina', 'max-width', 'max-height', 'slogan'] as $control) {
                $wp_customize->get_control('logo-'.$control)->section = 'title_tagline';
            }
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
