<div class="nc3Assets index">
	<h2><?php echo __('Nc3 Assets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('hash_content'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nc3Assets as $nc3Asset): ?>
	<tr>
		<td><?php echo h($nc3Asset['Nc3Asset']['id']); ?>&nbsp;</td>
		<td><?php echo h($nc3Asset['Nc3Asset']['url']); ?>&nbsp;</td>
		<td><?php echo h($nc3Asset['Nc3Asset']['hash_content']); ?>&nbsp;</td>
		<td><?php echo h($nc3Asset['Nc3Asset']['plugin']); ?>&nbsp;</td>
		<td><?php echo h($nc3Asset['Nc3Asset']['created']); ?>&nbsp;</td>
		<td><?php echo h($nc3Asset['Nc3Asset']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nc3Asset['Nc3Asset']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nc3Asset['Nc3Asset']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nc3Asset['Nc3Asset']['id']), null, __('Are you sure you want to delete # %s?', $nc3Asset['Nc3Asset']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Nc3 Asset'), array('action' => 'add')); ?></li>
	</ul>
</div>
