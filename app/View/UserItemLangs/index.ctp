<div class="userItemLangs index">
	<h2><?php echo __('User Item Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('options'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItemLangs as $userItemLang): ?>
	<tr>
		<td><?php echo h($userItemLang['UserItemLang']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userItemLang['UserItem']['id'], array('controller' => 'user_items', 'action' => 'view', $userItemLang['UserItem']['id'])); ?>
		</td>
		<td><?php echo h($userItemLang['UserItemLang']['lang']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['name']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['description']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['options']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['created']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userItemLang['UserItemLang']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userItemLang['UserItemLang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userItemLang['UserItemLang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userItemLang['UserItemLang']['id']), null, __('Are you sure you want to delete # %s?', $userItemLang['UserItemLang']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Item Lang'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
