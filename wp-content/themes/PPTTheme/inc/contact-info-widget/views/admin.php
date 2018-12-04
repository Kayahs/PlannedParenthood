<!-- This file is used to markup the administration form of the widget. -->

<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('tel'); ?>">Phone:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('tel'); ?>" name="<?php echo $this->get_field_name('tel'); ?>" type="text" value="<?php echo $tel; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('fax'); ?>">Fax:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" type="text" value="<?php echo $fax; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('media'); ?>">Media:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('media'); ?>" name="<?php echo $this->get_field_name('media'); ?>" type="text" value="<?php echo $media; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('note'); ?>">Note:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('note'); ?>" name="<?php echo $this->get_field_name('note'); ?>" type="text" value="<?php echo $note; ?>">
   </p>


</div>
