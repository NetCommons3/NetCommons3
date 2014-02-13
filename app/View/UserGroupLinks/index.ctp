<div class="userGroupLinks index">
	<h2><?php echo __('User Group Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userGroupLinks as $userGroupLink): ?>
	<tr>
		<td><?php echo h($userGroupLink['UserGroupLink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userGroupLink['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $userGroupLink['UserGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userGroupLink['User']['id'], array('controller' => 'users', 'action' => 'view', $userGroupLink['User']['id'])); ?>
		</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['created']); ?>&nbsp;</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userGroupLink['UserGroupLink']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userGroupLink['UserGroupLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userGroupLink['UserGroupLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userGroupLink['UserGroupLink']['id']), null, __('Are you sure you want to delete # %s?', $userGroupLink['UserGroupLink']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
