<div class="pageTrees index">
	<h2><?php echo __('Page Trees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('child'); ?></th>
			<th><?php echo $this->Paginator->sort('stratum_num'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageTrees as $pageTree): ?>
	<tr>
		<td><?php echo h($pageTree['PageTree']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pageTree['ParentPageTree']['id'], array('controller' => 'page_trees', 'action' => 'view', $pageTree['ParentPageTree']['id'])); ?>
		</td>
		<td><?php echo h($pageTree['PageTree']['child']); ?>&nbsp;</td>
		<td><?php echo h($pageTree['PageTree']['stratum_num']); ?>&nbsp;</td>
		<td><?php echo h($pageTree['PageTree']['created']); ?>&nbsp;</td>
		<td><?php echo h($pageTree['PageTree']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pageTree['PageTree']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pageTree['PageTree']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pageTree['PageTree']['id']), null, __('Are you sure you want to delete # %s?', $pageTree['PageTree']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page Tree'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Page Trees'), array('controller' => 'page_trees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Page Tree'), array('controller' => 'page_trees', 'action' => 'add')); ?> </li>
	</ul>
</div>
