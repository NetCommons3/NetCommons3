<div class="userItemAuthorityLinks index">
	<h2><?php echo __('User Item Authority Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_authority'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_lower_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('show_lower_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItemAuthorityLinks as $userItemAuthorityLink): ?>
	<tr>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userItemAuthorityLink['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemAuthorityLink['UserItem']['id'])); ?>
		</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['user_authority']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['edit_lower_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['show_lower_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userItemAuthorityLink['UserItemAuthorityLink']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userItemAuthorityLink['UserItemAuthorityLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userItemAuthorityLink['UserItemAuthorityLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userItemAuthorityLink['UserItemAuthorityLink']['id']), null, __('Are you sure you want to delete # %s?', $userItemAuthorityLink['UserItemAuthorityLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
