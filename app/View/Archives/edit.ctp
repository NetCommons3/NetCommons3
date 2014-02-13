<div class="archives form">
<?php echo $this->Form->create('Archive'); ?>
	<fieldset>
		<legend><?php echo __('Edit Archive'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parent_model_name');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('module_id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('model_name');
		echo $this->Form->input('plugin_unique');
		echo $this->Form->input('status');
		echo $this->Form->input('is_approved');
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('access_hierarchy');
		echo $this->Form->input('count');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('search_content');
		echo $this->Form->input('url');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Archive.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Archive.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Archives'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
