<div class="whatsnewSelectRooms form">
<?php echo $this->Form->create('WhatsnewSelectRoom'); ?>
	<fieldset>
		<legend><?php echo __('Add Whatsnew Select Room'); ?></legend>
	<?php
		echo $this->Form->input('block_id');
		echo $this->Form->input('room_num');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Whatsnew Select Rooms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
