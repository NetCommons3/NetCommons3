<div class="modules form">
<?php echo $this->Form->create('Module'); ?>
	<fieldset>
		<legend><?php echo __('Add Module'); ?></legend>
	<?php
		echo $this->Form->input('dir_name');
		echo $this->Form->input('version');
		echo $this->Form->input('system_flag');
		echo $this->Form->input('disposition_flag');
		echo $this->Form->input('controller_action');
		echo $this->Form->input('edit_controller_action');
		echo $this->Form->input('style_controller_action');
		echo $this->Form->input('display_sequence');
		echo $this->Form->input('module_icon');
		echo $this->Form->input('temp_name');
		echo $this->Form->input('content_has_one');
		echo $this->Form->input('copy_operation');
		echo $this->Form->input('shortcut_operation');
		echo $this->Form->input('move_operation');
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

		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Config Langs'), array('controller' => 'config_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config Lang'), array('controller' => 'config_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('controller' => 'configs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
