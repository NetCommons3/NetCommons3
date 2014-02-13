<div class="uploadLinks form">
<?php echo $this->Form->create('UploadLink'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload Link'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('upload_id');
		echo $this->Form->input('plugin');
		echo $this->Form->input('content_id');
		echo $this->Form->input('plugin_unique');
		echo $this->Form->input('model_name');
		echo $this->Form->input('field_name');
		echo $this->Form->input('access_hierarchy');
		echo $this->Form->input('is_use');
		echo $this->Form->input('download_password');
		echo $this->Form->input('check_component_action');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UploadLink.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UploadLink.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
