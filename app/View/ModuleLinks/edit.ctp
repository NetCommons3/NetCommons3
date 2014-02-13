<div class="moduleLinks form">
<?php echo $this->Form->create('ModuleLink'); ?>
	<fieldset>
		<legend><?php echo __('Edit Module Link'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('space_type');
		echo $this->Form->input('authority_id');
		echo $this->Form->input('room_num');
		echo $this->Form->input('module_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ModuleLink.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ModuleLink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
