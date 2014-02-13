<div class="backgrounds form">
<?php echo $this->Form->create('Background'); ?>
	<fieldset>
		<legend><?php echo __('Add Background'); ?></legend>
	<?php
		echo $this->Form->input('group_num');
		echo $this->Form->input('type');
		echo $this->Form->input('name');
		echo $this->Form->input('category');
		echo $this->Form->input('color');
		echo $this->Form->input('file_path');
		echo $this->Form->input('file_width');
		echo $this->Form->input('file_height');
		echo $this->Form->input('file_size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Backgrounds'), array('action' => 'index')); ?></li>
	</ul>
</div>
