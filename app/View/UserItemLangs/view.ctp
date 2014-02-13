<div class="userItemLangs view">
<h2><?php echo __('User Item Lang'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userItemLang['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemLang['UserItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Options'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['options']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userItemLang['UserItemLang']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Item Lang'), array('action' => 'edit', $userItemLang['UserItemLang']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Item Lang'), array('action' => 'delete', $userItemLang['UserItemLang']['id']), null, __('Are you sure you want to delete # %s?', $userItemLang['UserItemLang']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Langs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Lang'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
