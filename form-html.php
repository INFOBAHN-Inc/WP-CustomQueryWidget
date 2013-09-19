<?php 
/**
 * form-html.php
 * @package WordPress
 * @subpackage custom-query
 * @author s.ashikawa
 */
?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('query'); ?>">Query:</label>
    <input id="<?php echo $this->get_field_id('query'); ?>" name="<?php echo $this->get_field_name('query'); ?>" type="text" value="<?php echo $query; ?>" />
</p>
<p class="description">
    ex:) featured=yes&amp;post_type=post&amp;showposts=5
</p>
<p class="description">
	<a href="http://wpdocs.sourceforge.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/WP_Query#.E3.83.91.E3.83.A9.E3.83.A1.E3.83.BC.E3.82.BF" target="_blank">マニュアル</a>
</p>
