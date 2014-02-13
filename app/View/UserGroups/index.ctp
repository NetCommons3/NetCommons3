<div class="userGroups index">
	<h2><?php echo __('User Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userGroups as $userGroup): ?>
	<tr>
		<td><?php echo h($userGroup['UserGroup']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userGroup['Module']['id'], array('controller' => 'modules', 'action' => 'view', $userGroup['Module']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userGroup['Content']['title'], array('controller' => 'contents', 'action' => 'view', $userGroup['Content']['id'])); ?>
		</td>
		<td><?php echo h($userGroup['UserGroup']['name']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['created']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userGroup['UserGroup']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userGroup['UserGroup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userGroup['UserGroup']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userGroup['UserGroup']['id']), null, __('Are you sure you want to delete # %s?', $userGroup['UserGroup']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Group'), array('action' => 'add')); ?></li>
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
