<?php
/*
Plugin Name: Custom Query
Description:
Version: 0.1
Author: s.ashikawa
*/

/**
 * Custom_Query_Widget
 * @package WordPress
 * @subpackage custom-query
 * @author s.ashikawa
 */
class Custom_Query_Widget extends WP_Widget
{
    /**
     * @var string
     */
    protected $_default_template = "widget-html.php";

    /**
     * __construct
     */
    public function __construct()
    {
        parent::__construct(false, $name = 'Custom Query');
    }

    /**
     * (non-PHPdoc)
     * @param array $instance
     * @see WP_Widget::form()
     */
    public function form($instance)
    {
        $title      = esc_attr($instance['title']);
        $query      = esc_attr($instance['query']);

        include 'form-html.php';
    }

    /**
     * (non-PHPdoc)
     * @param array $new_instance
     * @param array $old_instance
     * @see WP_Widget::update()
     */
    public function update($new_instance, $old_instance)
    {
        $instance               = $old_instance;
        $instance['title']      = strip_tags($new_instance['title']);
        $instance['query']      = strip_tags($new_instance['query']);

        return $instance;
    }

    /**
     * (non-PHPdoc)
     * @see WP_Widget::widget()
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        extract($args);

        $title = apply_filters('widget_title', $instance['title']);

        $query = new WP_Query($instance['query']);

        include $this->_get_template_path($args, $instance);
    }

    /**
     * HTML出力ファイルのパスを探す
     * @param  array  $args
     * @param  array  $instance
     * @return string
     */
    protected function _get_template_path($args, $instance)
    {
        $default = $this->_default_template;

        $file    = apply_filters("custom_query_get_template", $default);
        $file    = apply_filters("custom_query_get_template_{$instance['title']}", $file);

        if (is_readable(STYLESHEETPATH . "/" . $file)) {
            return STYLESHEETPATH . "/" . $file;
        }

        if (is_readable(TEMPLATEPATH . "/" . $file)) {
            return TEMPLATEPATH . "/" . $file;
        }

        return __DIR__ . "/" . $file;
    }
}

add_action('widgets_init', function () {
    return register_widget("Custom_Query_Widget");
});
