<div class="configs form">
<?php echo $this->Form->create('Config'); ?>
	<fieldset>
		<legend><?php echo __('Edit Config'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('module_id');
		echo $this->Form->input('category');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('title');
		echo $this->Form->input('value');
		echo $this->Form->input('description');
		echo $this->Form->input('options');
		echo $this->Form->input('domain');
		echo $this->Form->input('attribute');
		echo $this->Form->input('required');
		echo $this->Form->input('minlength');
		echo $this->Form->input('maxlength');
		echo $this->Form->input('regexp');
		echo $this->Form->input('lang_flag');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Config.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Config.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
