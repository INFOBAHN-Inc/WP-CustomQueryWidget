<?php
/**
 * widget-html.php
 * @package WordPress
 * @subpackage custom-query
 * @author s.ashikawa
 * @global $title, $id, $description, $class, $before_widget,
 * $after_widget, $before_title, $after_title, $widget_id, $widget_name, $instance
 */
?>
<!-- Custom Query Widget Plugin -->
<?php echo $before_widget; ?>
<?php if ($instance['title']) : ?>
    <?php echo $before_title, esc_html($instance['title']), $after_title; ?>
<?php endif;?>
    <ul>
<?php foreach ($posts as $post) : ?>
        <li><a href="<?php echo esc_attr(get_permalink($post->ID)); ?>"><?php echo esc_html($post->post_title) ?></a></li>
<?php endforeach; ?>
    </ul>
<?php echo $after_widget; ?>
<!-- /Custom Query Widget Plugin -->
