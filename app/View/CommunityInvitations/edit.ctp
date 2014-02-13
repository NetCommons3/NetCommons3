<div class="communityInvitations form">
<?php echo $this->Form->create('CommunityInvitation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Community Invitation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('room_num');
		echo $this->Form->input('user_id');
		echo $this->Form->input('activate_key');
		echo $this->Form->input('is_pending_approval_mail');
		echo $this->Form->input('expires');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommunityInvitation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CommunityInvitation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Community Invitations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
