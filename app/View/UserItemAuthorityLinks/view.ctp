<div class="userItemAuthorityLinks view">
<h2><?php echo __('User Item Authority Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userItemAuthorityLink['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemAuthorityLink['UserItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Authority'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['user_authority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit Lower Hierarchy'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['edit_lower_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Lower Hierarchy'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['show_lower_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Item Authority Link'), array('action' => 'edit', $userItemAuthorityLink['UserItemAuthorityLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Item Authority Link'), array('action' => 'delete', $userItemAuthorityLink['UserItemAuthorityLink']['id']), null, __('Are you sure you want to delete # %s?', $userItemAuthorityLink['UserItemAuthorityLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Authority Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
