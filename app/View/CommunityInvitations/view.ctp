<div class="communityInvitations view">
<h2><?php echo __('Community Invitation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($communityInvitation['User']['id'], array('controller' => 'users', 'action' => 'view', $communityInvitation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate Key'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['activate_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Pending Approval Mail'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['is_pending_approval_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['expires']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($communityInvitation['CommunityInvitation']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Community Invitation'), array('action' => 'edit', $communityInvitation['CommunityInvitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Community Invitation'), array('action' => 'delete', $communityInvitation['CommunityInvitation']['id']), null, __('Are you sure you want to delete # %s?', $communityInvitation['CommunityInvitation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Invitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Invitation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
