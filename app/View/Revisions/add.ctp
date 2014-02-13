<div class="revisions form">
<?php echo $this->Form->create('Revision'); ?>
	<fieldset>
		<legend><?php echo __('Add Revision'); ?></legend>
	<?php
		echo $this->Form->input('revision_root');
		echo $this->Form->input('pointer');
		echo $this->Form->input('is_approved_pointer');
		echo $this->Form->input('revision_name');
		echo $this->Form->input('content_id');
		echo $this->Form->input('content');
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

		<li><?php echo $this->Html->link(__('List Revisions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
