<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content clinic-hours">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('des'); ?>">Descriptions</label>
      <input class="widefat" id="<?php echo $this->get_field_id('des'); ?>" name="<?php echo $this->get_field_name('des'); ?>" type="text" value="<?php echo $des; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('mon_tue_thu'); ?>">Monday, Tuesday, Thursday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('mon_tue_thu'); ?>" name="<?php echo $this->get_field_name('mon_tue_thu'); ?>" type="text" value="<?php echo $mon_tue_thu; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('wed'); ?>">Wednesday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('wed'); ?>" name="<?php echo $this->get_field_name('wed'); ?>" type="text" value="<?php echo $wed; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('fri'); ?>">Friday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('fri'); ?>" name="<?php echo $this->get_field_name('fri'); ?>" type="text" value="<?php echo $fri; ?>">
   </p>


</div>