<div class="configLangs form">
<?php echo $this->Form->create('ConfigLang'); ?>
	<fieldset>
		<legend><?php echo __('Add Config Lang'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
		echo $this->Form->input('config_name');
		echo $this->Form->input('lang');
		echo $this->Form->input('value');
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

		<li><?php echo $this->Html->link(__('List Config Langs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
