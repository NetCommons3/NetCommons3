<div class="whatsnewSelectRooms index">
	<h2><?php echo __('Whatsnew Select Rooms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('block_id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($whatsnewSelectRooms as $whatsnewSelectRoom): ?>
	<tr>
		<td><?php echo h($whatsnewSelectRoom['WhatsnewSelectRoom']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($whatsnewSelectRoom['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $whatsnewSelectRoom['Block']['id'])); ?>
		</td>
		<td><?php echo h($whatsnewSelectRoom['WhatsnewSelectRoom']['room_num']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $whatsnewSelectRoom['WhatsnewSelectRoom']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $whatsnewSelectRoom['WhatsnewSelectRoom']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $whatsnewSelectRoom['WhatsnewSelectRoom']['id']), null, __('Are you sure you want to delete # %s?', $whatsnewSelectRoom['WhatsnewSelectRoom']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Whatsnew Select Room'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
