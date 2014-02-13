<div class="uploads form">
<?php echo $this->Form->create('Upload'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('file_name');
		echo $this->Form->input('alt');
		echo $this->Form->input('caption');
		echo $this->Form->input('description');
		echo $this->Form->input('file_size');
		echo $this->Form->input('file_path');
		echo $this->Form->input('mimetype');
		echo $this->Form->input('extension');
		echo $this->Form->input('plugin');
		echo $this->Form->input('upload_model_name');
		echo $this->Form->input('is_delete_from_library');
		echo $this->Form->input('is_use');
		echo $this->Form->input('is_wysiwyg');
		echo $this->Form->input('download_count');
		echo $this->Form->input('year');
		echo $this->Form->input('month');
		echo $this->Form->input('day');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Upload.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('controller' => 'upload_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
