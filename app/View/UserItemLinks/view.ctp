<div class="userItemLinks view">
<h2><?php echo __('User Item Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userItemLink['UserItemLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userItemLink['User']['id'], array('controller' => 'users', 'action' => 'view', $userItemLink['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($userItemLink['UserItemLink']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userItemLink['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemLink['UserItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Flag'); ?></dt>
		<dd>
			<?php echo h($userItemLink['UserItemLink']['public_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Reception Flag'); ?></dt>
		<dd>
			<?php echo h($userItemLink['UserItemLink']['email_reception_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($userItemLink['UserItemLink']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Item Link'), array('action' => 'edit', $userItemLink['UserItemLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Item Link'), array('action' => 'delete', $userItemLink['UserItemLink']['id']), null, __('Are you sure you want to delete # %s?', $userItemLink['UserItemLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
