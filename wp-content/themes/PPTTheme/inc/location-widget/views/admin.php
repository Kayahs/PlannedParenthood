<!-- This file is used to markup the administration form of the widget. -->

<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('locLine1'); ?>">Line 1 (Company's Name):</label>
      <input class="widefat" id="<?php echo $this->get_field_id('locLine1'); ?>" name="<?php echo $this->get_field_name('locLine1'); ?>" type="text" value="<?php echo $locLine1; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('locLine2'); ?>">Line 2 (Number, Street):</label>
      <input class="widefat" id="<?php echo $this->get_field_id('locLine2'); ?>" name="<?php echo $this->get_field_name('locLine2'); ?>" type="text" value="<?php echo $locLine2; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('locLine3'); ?>">Line 3 (City, Province, Postal Code):</label>
      <input class="widefat" id="<?php echo $this->get_field_id('locLine3'); ?>" name="<?php echo $this->get_field_name('locLine3'); ?>" type="text" value="<?php echo $locLine3; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('locLine4'); ?>">Line 4 (Country):</label>
      <input class="widefat" id="<?php echo $this->get_field_id('locLine4'); ?>" name="<?php echo $this->get_field_name('locLine4'); ?>" type="text" value="<?php echo $locLine4; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('note'); ?>">Notes:</label>
      <textarea rows="4" class="widefat" id="<?php echo $this->get_field_id('note'); ?>" name="<?php echo $this->get_field_name('note'); ?>" type="text"><?php echo $note; ?></textarea>
   </p>
</div>
