<div class="userInvitations view">
<h2><?php echo __('User Invitation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate Key'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['activate_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Pending Approval Mail'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['is_pending_approval_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['expires']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userInvitation['UserInvitation']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Invitation'), array('action' => 'edit', $userInvitation['UserInvitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Invitation'), array('action' => 'delete', $userInvitation['UserInvitation']['id']), null, __('Are you sure you want to delete # %s?', $userInvitation['UserInvitation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Invitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Invitation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
