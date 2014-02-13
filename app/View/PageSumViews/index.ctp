<div class="pageSumViews index">
	<h2><?php echo __('Page Sum Views'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sum'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageSumViews as $pageSumView): ?>
	<tr>
		<td><?php echo h($pageSumView['PageSumView']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pageSumView['User']['id'], array('controller' => 'users', 'action' => 'view', $pageSumView['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pageSumView['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageSumView['Page']['id'])); ?>
		</td>
		<td><?php echo h($pageSumView['PageSumView']['sum']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['created']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($pageSumView['PageSumView']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pageSumView['PageSumView']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pageSumView['PageSumView']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pageSumView['PageSumView']['id']), null, __('Are you sure you want to delete # %s?', $pageSumView['PageSumView']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
