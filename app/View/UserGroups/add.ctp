<div class="userGroups form">
<?php echo $this->Form->create('UserGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add User Group'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('name');
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

		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Links'), array('controller' => 'user_group_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
