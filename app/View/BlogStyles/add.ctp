<div class="blogStyles form">
<?php echo $this->Form->create('BlogStyle'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog Style'); ?></legend>
	<?php
		echo $this->Form->input('block_id');
		echo $this->Form->input('widget_type');
		echo $this->Form->input('display_flag');
		echo $this->Form->input('col_num');
		echo $this->Form->input('row_num');
		echo $this->Form->input('visible_item');
		echo $this->Form->input('options');
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

		<li><?php echo $this->Html->link(__('List Blog Styles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
