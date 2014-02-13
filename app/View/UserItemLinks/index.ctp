<div class="userItemLinks index">
	<h2><?php echo __('User Item Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('user_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('public_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('email_reception_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItemLinks as $userItemLink): ?>
	<tr>
		<td><?php echo h($userItemLink['UserItemLink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userItemLink['User']['id'], array('controller' => 'users', 'action' => 'view', $userItemLink['User']['id'])); ?>
		</td>
		<td><?php echo h($userItemLink['UserItemLink']['lang']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userItemLink['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemLink['UserItem']['id'])); ?>
		</td>
		<td><?php echo h($userItemLink['UserItemLink']['public_flag']); ?>&nbsp;</td>
		<td><?php echo h($userItemLink['UserItemLink']['email_reception_flag']); ?>&nbsp;</td>
		<td><?php echo h($userItemLink['UserItemLink']['content']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userItemLink['UserItemLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userItemLink['UserItemLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userItemLink['UserItemLink']['id']), null, __('Are you sure you want to delete # %s?', $userItemLink['UserItemLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Item Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
