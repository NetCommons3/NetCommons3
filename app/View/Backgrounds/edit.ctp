<div class="backgrounds form">
<?php echo $this->Form->create('Background'); ?>
	<fieldset>
		<legend><?php echo __('Edit Background'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Background.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Background.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Backgrounds'), array('action' => 'index')); ?></li>
	</ul>
</div>
