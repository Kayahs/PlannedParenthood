<!-- This file is used to markup the administration form of the widget. -->

<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('note'); ?>">Note:</label>
      <textarea rows="4" class="widefat" id="<?php echo $this->get_field_id('note'); ?>" name="<?php echo $this->get_field_name('note'); ?>" type="text" value="<?php echo $note; ?>"></textarea>
   </p>


</div>
