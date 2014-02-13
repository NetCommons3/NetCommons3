<div class="userItemLinks form">
<?php echo $this->Form->create('UserItemLink'); ?>
	<fieldset>
		<legend><?php echo __('Add User Item Link'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('lang');
		echo $this->Form->input('user_item_id');
		echo $this->Form->input('public_flag');
		echo $this->Form->input('email_reception_flag');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Item Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
