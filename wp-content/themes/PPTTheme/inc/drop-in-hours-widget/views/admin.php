<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content drop-in-hours">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('des'); ?>">Descriptions</label>
      <input class="widefat" id="<?php echo $this->get_field_id('des'); ?>" name="<?php echo $this->get_field_name('des'); ?>" type="text" value="<?php echo $des; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('sat'); ?>">Saturday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sat'); ?>" name="<?php echo $this->get_field_name('sat'); ?>" type="text" value="<?php echo $sat; ?>">
   </p>


</div>