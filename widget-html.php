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
<?php if ($query->have_posts()) : ?>
    <ul>
<?php
	while($query->have_posts()) :
		$query->the_post();
?>
        <li><a href="<?php echo esc_attr(get_permalink()); ?>"><?php the_title(); ?></a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>
    </ul>
<?php else: ?>
	No Data
<?php endif; ?>
<?php echo $after_widget; ?>
<!-- /Custom Query Widget Plugin -->
