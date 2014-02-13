<div class="whatsnewSelectUsers form">
<?php echo $this->Form->create('WhatsnewSelectUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Whatsnew Select User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('block_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('WhatsnewSelectUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('WhatsnewSelectUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
