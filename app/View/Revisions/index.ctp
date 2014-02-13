<div class="revisions index">
	<h2><?php echo __('Revisions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('revision_root'); ?></th>
			<th><?php echo $this->Paginator->sort('pointer'); ?></th>
			<th><?php echo $this->Paginator->sort('is_approved_pointer'); ?></th>
			<th><?php echo $this->Paginator->sort('revision_name'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($revisions as $revision): ?>
	<tr>
		<td><?php echo h($revision['Revision']['id']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['revision_root']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['pointer']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['is_approved_pointer']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['revision_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($revision['Content']['title'], array('controller' => 'contents', 'action' => 'view', $revision['Content']['id'])); ?>
		</td>
		<td><?php echo h($revision['Revision']['content']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['created']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['modified']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($revision['Revision']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $revision['Revision']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $revision['Revision']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $revision['Revision']['id']), null, __('Are you sure you want to delete # %s?', $revision['Revision']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Revision'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
