<div class="whatsnewStyles form">
<?php echo $this->Form->create('WhatsnewStyle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Whatsnew Style'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('block_id');
		echo $this->Form->input('display_type');
		echo $this->Form->input('display_period_type');
		echo $this->Form->input('display_days');
		echo $this->Form->input('display_number');
		echo $this->Form->input('is_display_title');
		echo $this->Form->input('is_display_description');
		echo $this->Form->input('is_display_room_name');
		echo $this->Form->input('is_display_module_name');
		echo $this->Form->input('is_display_user_name');
		echo $this->Form->input('is_display_created');
		echo $this->Form->input('title_truncate_num');
		echo $this->Form->input('description_truncate_num');
		echo $this->Form->input('allow_rss_feed');
		echo $this->Form->input('display_modules');
		echo $this->Form->input('myportal_flag');
		echo $this->Form->input('myroom_flag');
		echo $this->Form->input('select_myportal_users');
		echo $this->Form->input('created_user');
		echo $this->Form->input('created_user_name');
		echo $this->Form->input('modified_user');
		echo $this->Form->input('modified_user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WhatsnewStyle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WhatsnewStyle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Whatsnew Styles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
