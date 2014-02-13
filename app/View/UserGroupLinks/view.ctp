<div class="userGroupLinks view">
<h2><?php echo __('User Group Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userGroupLink['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $userGroupLink['UserGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userGroupLink['User']['id'], array('controller' => 'users', 'action' => 'view', $userGroupLink['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userGroupLink['UserGroupLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Group Link'), array('action' => 'edit', $userGroupLink['UserGroupLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group Link'), array('action' => 'delete', $userGroupLink['UserGroupLink']['id']), null, __('Are you sure you want to delete # %s?', $userGroupLink['UserGroupLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
