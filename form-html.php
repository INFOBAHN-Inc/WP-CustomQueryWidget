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