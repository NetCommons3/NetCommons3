<div class="announcementEdits form">
<?php echo $this->Form->create('AnnouncementEdit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Announcement Edit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('post_hierarchy');
		echo $this->Form->input('approved_flag');
		echo $this->Form->input('approved_pre_change_flag');
		echo $this->Form->input('approved_mail_flag');
		echo $this->Form->input('approved_mail_subject');
		echo $this->Form->input('approved_mail_body');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AnnouncementEdit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AnnouncementEdit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Announcement Edits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
