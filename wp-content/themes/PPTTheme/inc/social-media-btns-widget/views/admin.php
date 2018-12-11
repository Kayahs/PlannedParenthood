<!-- This file is used to markup the administration form of the widget. -->

<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('insta'); ?>">Instagram Page:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('insta'); ?>" name="<?php echo $this->get_field_name('insta'); ?>" type="text" value="<?php echo $insta; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('fb'); ?>">Facebook page:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('fb'); ?>" name="<?php echo $this->get_field_name('fb'); ?>" type="text" value="<?php echo $fb; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('twi'); ?>">Twitter Page:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('twi'); ?>" name="<?php echo $this->get_field_name('twi'); ?>" type="text" value="<?php echo $twi; ?>">
   </p>

</div>
