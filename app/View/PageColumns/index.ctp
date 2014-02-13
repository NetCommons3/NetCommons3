<div class="pageColumns index">
	<h2><?php echo __('Page Columns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('scope'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('space_type'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('header_page'); ?></th>
			<th><?php echo $this->Paginator->sort('left_page'); ?></th>
			<th><?php echo $this->Paginator->sort('right_page'); ?></th>
			<th><?php echo $this->Paginator->sort('footer_page'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageColumns as $pageColumn): ?>
	<tr>
		<td><?php echo h($pageColumn['PageColumn']['id']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['scope']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['type']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['lang']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['space_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pageColumn['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageColumn['Page']['id'])); ?>
		</td>
		<td><?php echo h($pageColumn['PageColumn']['header_page']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['left_page']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['right_page']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['footer_page']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['created']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($pageColumn['PageColumn']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pageColumn['PageColumn']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pageColumn['PageColumn']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pageColumn['PageColumn']['id']), null, __('Are you sure you want to delete # %s?', $pageColumn['PageColumn']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page Column'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
