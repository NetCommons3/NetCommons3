<div class="pageStyles form">
<?php echo $this->Form->create('PageStyle'); ?>
	<fieldset>
		<legend><?php echo __('Edit Page Style'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('scope');
		echo $this->Form->input('type');
		echo $this->Form->input('lang');
		echo $this->Form->input('space_type');
		echo $this->Form->input('page_id');
		echo $this->Form->input('align');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
		echo $this->Form->input('original_background_image');
		echo $this->Form->input('original_background_repeat');
		echo $this->Form->input('original_background_position');
		echo $this->Form->input('original_background_attachment');
		echo $this->Form->input('file');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PageStyle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PageStyle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Page Styles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
