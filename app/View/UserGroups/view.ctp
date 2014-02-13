<div class="userGroups view">
<h2><?php echo __('User Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userGroup['Module']['id'], array('controller' => 'modules', 'action' => 'view', $userGroup['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userGroup['Content']['title'], array('controller' => 'contents', 'action' => 'view', $userGroup['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userGroup['UserGroup']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Group'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Group'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Links'), array('controller' => 'user_group_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Archives'); ?></h3>
	<?php if (!empty($userGroup['Archive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Model Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Search Content'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userGroup['Archive'] as $archive): ?>
		<tr>
			<td><?php echo $archive['id']; ?></td>
			<td><?php echo $archive['parent_model_name']; ?></td>
			<td><?php echo $archive['parent_id']; ?></td>
			<td><?php echo $archive['module_id']; ?></td>
			<td><?php echo $archive['content_id']; ?></td>
			<td><?php echo $archive['model_name']; ?></td>
			<td><?php echo $archive['plugin_unique']; ?></td>
			<td><?php echo $archive['status']; ?></td>
			<td><?php echo $archive['is_approved']; ?></td>
			<td><?php echo $archive['user_group_id']; ?></td>
			<td><?php echo $archive['access_hierarchy']; ?></td>
			<td><?php echo $archive['count']; ?></td>
			<td><?php echo $archive['title']; ?></td>
			<td><?php echo $archive['content']; ?></td>
			<td><?php echo $archive['search_content']; ?></td>
			<td><?php echo $archive['url']; ?></td>
			<td><?php echo $archive['created']; ?></td>
			<td><?php echo $archive['created_user']; ?></td>
			<td><?php echo $archive['created_user_name']; ?></td>
			<td><?php echo $archive['modified']; ?></td>
			<td><?php echo $archive['modified_user']; ?></td>
			<td><?php echo $archive['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'archives', 'action' => 'view', $archive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'archives', 'action' => 'edit', $archive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'archives', 'action' => 'delete', $archive['id']), null, __('Are you sure you want to delete # %s?', $archive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Group Links'); ?></h3>
	<?php if (!empty($userGroup['UserGroupLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userGroup['UserGroupLink'] as $userGroupLink): ?>
		<tr>
			<td><?php echo $userGroupLink['id']; ?></td>
			<td><?php echo $userGroupLink['user_group_id']; ?></td>
			<td><?php echo $userGroupLink['user_id']; ?></td>
			<td><?php echo $userGroupLink['created']; ?></td>
			<td><?php echo $userGroupLink['created_user']; ?></td>
			<td><?php echo $userGroupLink['created_user_name']; ?></td>
			<td><?php echo $userGroupLink['modified']; ?></td>
			<td><?php echo $userGroupLink['modified_user']; ?></td>
			<td><?php echo $userGroupLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_group_links', 'action' => 'view', $userGroupLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_group_links', 'action' => 'edit', $userGroupLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_group_links', 'action' => 'delete', $userGroupLink['id']), null, __('Are you sure you want to delete # %s?', $userGroupLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
