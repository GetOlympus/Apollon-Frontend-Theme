<?php

namespace ApollonFrontendTheme\Src\AdminPages;

class ApollonAdminPage extends \GetOlympus\Zeus\AdminPage\AdminPage
{
    /**
     * @var array
     */
    protected $contents = [];

    /**
     * @var string
     */
    protected $identifier = 'apollon';

    /**
     * @var string
     */
    protected $parent = '';

    /**
     * Prepare variables.
     */
    protected function setVars() : void
    {
        // Get JSONS
        $jsons = [
            'apollon.json',
            'features.json',
            'layouts.json',
            'logotypos.json',
            'options.json',
        ];

        // Main JSONS resources path
        $path = __DIR__.S.'src'.S;

        // Iterate
        foreach ($jsons as $json) {
            // Check file
            if (!file_exists($file = realpath($path.$json))) {
                continue;
            }

            // Build contents
            $filepath = file_get_contents($file);
            $options  = json_decode($filepath, true);

            // Check options' values
            if (empty($options)) {
                return;
            }

            // Get values...
            $this->contents['values'] = get_option($this->identifier);

            // Iterate on pages
            foreach ($options as $pageid => $page) {
                // Add page
                $this->addPage($pageid, [
                    'name'        => __($page['name'], OL_APOLLON_DICTIONARY),
                    'title'       => __($page['title'], OL_APOLLON_DICTIONARY),
                    'description' => isset($page['description']) ? __($page['description'], OL_APOLLON_DICTIONARY) : '',

                    'depends'     => isset($page['depends']) ? $page['depends'] : [],
                    'icon'        => isset($page['icon']) ? $page['icon'] : '',
                    'position'    => isset($page['position']) ? $page['position'] : 80,
                    'submit'      => isset($page['submit']) ? $page['submit'] : true,

                    'fields'      => isset($page['fields']) ? $this->getFields($page['fields']) : [],
                ]);

                // Check sections
                if (!isset($page['sections']) || empty($page['sections'])) {
                    continue;
                }

                // Iterate on sections
                foreach ($page['sections'] as $sectionid => $section) {
                    // Check fields
                    if (!isset($section['fields']) || empty($section['fields'])) {
                        continue;
                    }

                    // Add section
                    $this->addSection($sectionid, $pageid, [
                        'name'        => __($section['name'], OL_APOLLON_DICTIONARY),
                        'title'       => __($section['title'], OL_APOLLON_DICTIONARY),
                        'description' => isset($section['description'])
                            ? __($section['description'], OL_APOLLON_DICTIONARY)
                            : '',

                        'depends'     => isset($section['depends']) ? $section['depends'] : [],
                        'submit'      => isset($section['submit']) ? $section['submit'] : true,

                        'fields'      => $this->getFields($section['fields']),
                    ]);
                }
            }
        }
    }

    /**
     * Prepare fields.
     *
     * @param  array
     *
     * @return array
     */
    protected function getFields($fields) : array
    {
        $fds = [];

        if (empty($fields)) {
            return $fds;
        }

        // Build fields
        foreach ($fields as $sets) {
            $sets  = $this->getSettings($sets);

            if (empty($sets)) {
                continue;
            }

            $field = $sets['_field'];
            $identifier = $sets['_id'];
            $depends = isset($sets['_depends']) ? $sets['_depends'] : [];

            unset($sets['_field']);
            unset($sets['_id']);
            unset($sets['_depends']);

            $fds[] = $field::build($identifier, $sets);
        }

        return $fds;
    }

    /**
     * Prepare settings with __() and other special cases.
     *
     * @param  array
     *
     * @return array
     */
    protected function getSettings($settings) : array
    {
        $options    = ['\\GetOlympus\\Dionysos\\Field\\Radio', '\\GetOlympus\\Dionysos\\Field\\Select'];
        $texts      = ['\\GetOlympus\\Dionysos\\Field\\Text', '\\GetOlympus\\Dionysos\\Field\\Textarea'];
        $ptexcludes = [
            'page', 'attachment', 'revision', 'nav_menu_item', 'custom_css',
            'customize_changeset', 'oembed_cache', 'user_request', 'wp_block'
        ];


        // Depends
        /*if (isset($settings['_depends'])) {
            $optname   = !empty($this->option_name) ? $this->option_name : $settings['_depends'][0];
            $attempted = $settings['_depends'][1];

            $status   = $optvalue != $attempted
                ? false
                : (is_array($attempted) && !in_array($optvalue, $attempted) ? false : $status);
        }*/

        // Title
        if (isset($settings['title'])) {
            $settings['title'] = __($settings['title'], OL_APOLLON_DICTIONARY);
        }

        // Description
        if (isset($settings['description'])) {
            $settings['description'] = __($settings['description'], OL_APOLLON_DICTIONARY);
        }

        // Content
        if (isset($settings['content'])) {
            $settings['content'] = __($settings['content'], OL_APOLLON_DICTIONARY);
        }


        // Special `__postsperpage__` case
        if (isset($settings['default']) && '__postsperpage__' === $settings['default']) {
            $this->contents['posts_per_page'] = isset($this->contents['posts_per_page'])
                ? $this->contents['posts_per_page']
                : get_option('posts_per_page');

            $settings['default'] = $this->contents['posts_per_page'];
        }

        // Special `__posttypes__` case
        if (isset($settings['default']) || isset($settings['options'])) {
            $pts = (isset($settings['default']) && '__posttypes__' === $settings['default'])
                || (isset($settings['options']) && '__posttypes__' === $settings['options']);

            if ($pts) {
                $this->contents['posttypes'] = isset($this->contents['posttypes'])
                    ? $this->contents['posttypes']
                    : get_post_types();

                foreach (['default', 'options'] as $key) {
                    if (!isset($settings[$key]) || '__posttypes__' !== $settings[$key]) {
                        continue;
                    }

                    $settings[$key] = [];

                    foreach ($this->contents['posttypes'] as $posttype => $name) {
                        if (in_array($posttype, $ptexcludes)) {
                            continue;
                        }

                        $settings[$key][$posttype] = $name;
                    }
                }
            }
        }

        // Special `__sidebars__` case
        if (isset($settings['options']) && '__sidebars__' === $settings['options']) {
            $this->contents['sidebars'] = isset($this->contents['sidebars'])
                ? $this->contents['sidebars']
                : $GLOBALS['wp_registered_sidebars'];

            foreach (['default', 'options'] as $key) {
                if (!isset($settings[$key]) || '__sidebars__' !== $settings[$key]) {
                    continue;
                }

                $settings[$key] = [];

                foreach ($this->contents['sidebars'] as $sidebar) {
                    $settings[$key][$sidebar['id']] = $sidebar['name'];
                }
            }
        }


        // `'\\GetOlympus\\Dionysos\\Field\\Header'` case
        if ('\\GetOlympus\\Dionysos\\Field\\Header' === $settings['_field']) {
            $settings['mode'] = isset($settings['mode'], $this->contents['values'][$settings['mode']])
                ? $this->contents['values'][$settings['mode']]
                : 'top';

            if (isset($settings['options'])) {
                foreach ($settings['options'] as $key => $val) {
                    if (false === $val) {
                        continue;
                    }

                    $settings['options'][$key] = __($val, OL_APOLLON_DICTIONARY);
                }
            }
        }

        // Optionnable fields case
        if (in_array($settings['_field'], $options) && isset($settings['options'])) {
            foreach ($settings['options'] as $k => $v) {
                if (is_string($v)) {
                    $settings['options'][$k] = __($v, OL_APOLLON_DICTIONARY);
                    continue;
                }

                foreach ($v as $vk => $vv) {
                    if (false !== strpos($vv, '__theme_uri__')) {
                        $settings['options'][$k][$vk] = str_replace('__theme_uri__', OL_TPL_DIR_URI, $vv);
                        continue;
                    }

                    $settings['options'][$k][$vk] = __($vv, OL_APOLLON_DICTIONARY);
                }
            }
        }

        // Optionnable fields case
        if (in_array($settings['_field'], $texts) && isset($settings['default'])) {
            $settings['default'] = __($settings['default'], OL_APOLLON_DICTIONARY);
        }


        return $settings;
    }
}
