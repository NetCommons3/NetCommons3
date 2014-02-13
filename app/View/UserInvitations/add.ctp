<div class="userInvitations form">
<?php echo $this->Form->create('UserInvitation'); ?>
	<fieldset>
		<legend><?php echo __('Add User Invitation'); ?></legend>
	<?php
		echo $this->Form->input('user_name');
		echo $this->Form->input('email');
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

		<li><?php echo $this->Html->link(__('List User Invitations'), array('action' => 'index')); ?></li>
	</ul>
</div>
