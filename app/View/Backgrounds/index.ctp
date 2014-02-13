<div class="backgrounds index">
	<h2><?php echo __('Backgrounds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_num'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('color'); ?></th>
			<th><?php echo $this->Paginator->sort('file_path'); ?></th>
			<th><?php echo $this->Paginator->sort('file_width'); ?></th>
			<th><?php echo $this->Paginator->sort('file_height'); ?></th>
			<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($backgrounds as $background): ?>
	<tr>
		<td><?php echo h($background['Background']['id']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['group_num']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['type']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['name']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['category']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['color']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['file_path']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['file_width']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['file_height']); ?>&nbsp;</td>
		<td><?php echo h($background['Background']['file_size']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $background['Background']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $background['Background']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $background['Background']['id']), null, __('Are you sure you want to delete # %s?', $background['Background']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Background'), array('action' => 'add')); ?></li>
	</ul>
</div>
