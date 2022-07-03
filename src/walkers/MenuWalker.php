<?php

namespace ApollonFrontendTheme;

if (!class_exists('Walker_Nav_Menu')) {
    require_once(ABSPATH.'wp-includes/class-walker-nav-menu.php');
}

class MenuWalker extends \Walker_Nav_Menu
{
    /**
     * Starts the list before the elements are added.
     *
     * @param string $output
     * @param int $depth
     * @param array $args
     */
    public function start_lvl(&$output, $depth = 0, $args = []) // phpcs:ignore
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= $indent."\n";
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @param string $output
     * @param int $depth
     * @param array $args
     */
    public function end_lvl(&$output, $depth = 0, $args = []) // phpcs:ignore
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= $indent."\n";
    }

    /**
     * Traverse elements to create list from elements.
     *
     * @param object $element
     * @param array $children_elements
     * @param int $max_depth
     * @param int $depth
     * @param array $args
     * @param string $output
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) // phpcs:ignore
    {
        $id_field = $this->db_fields['id'];

        if (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }

        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    /**
     * Start the element output.
     *
     * @param string $output
     * @param object $item
     * @param int $depth
     * @param array $args
     * @param int $id
     */
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) // phpcs:ignore
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= $indent;

        // Classes
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $classes[] = 'navbar-item';

        if (!$args->has_children) {
            $classes[] = 'item';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $wrap_names = strpos($class_names, ' current-') ? ' class="uk-active"' : '';

        // Build attributes
        $attributes = '';
        $atts = [
            'href'      => !empty($item->url) ? $item->url : '',
            'title'     => !empty($item->attr_title) ? $item->attr_title : '',
            'target'    => !empty($item->target) ? $item->target : '',
            'rel'       => !empty($item->xfn) ? $item->xfn : '',
        ];

        // Iterate on all
        foreach ($atts as $attr => $value) {
            if (empty($value)) {
                continue;
            }

            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
            $attributes .= ' '.$attr.'="'.$value.'"';
        }

        // Build item
        $item_output  = $args->before;
        $item_output .= '<a'.$attributes.$class_names.'>';
        $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;

        if ($args->has_children) {
            $item_output .= apply_filters(
                'ol.apollon.menu_walker_children_icon',
                '<i class="uk-margin-xsmall-left" uk-icon="icon:chevron-down; ratio:.75;"></i>'
            );
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        // Build output
        $output .= '<li'.$wrap_names.'>';
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

        // Build children
        if ($args->has_children) {
            $output .= apply_filters(
                'ol.apollon.menu_walker_before_children_dropdown',
                sprintf(
                    '<div class="uk-navbar-dropdown uk-box-shadow-%s"><ul class="uk-nav uk-navbar-dropdown-nav">',
                    apollonGetOption('dropdown-shadow', 'small')
                )
            );
        }
    }

    /**
     * Ends the element output, if needed.
     *
     * @param string $output
     * @param object $category
     * @param int $depth
     * @param array $args
     */
    public function end_el(&$output, $item, $depth = 0, $args = []) // phpcs:ignore
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $output .= $indent;

        // Build parent
        if (!empty($item->classes) && is_array($item->classes) &&  in_array('menu-item-has-children', $item->classes)) {
            $output .= apply_filters('ol.apollon.menu_walker_after_children_dropdown', '</ul></div>');
        }

        $output .= '</li>';
        $output .= "\n";
    }
}
