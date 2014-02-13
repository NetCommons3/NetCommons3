<div class="uploads index">
	<h2><?php echo __('Uploads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file_name'); ?></th>
			<th><?php echo $this->Paginator->sort('alt'); ?></th>
			<th><?php echo $this->Paginator->sort('caption'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th><?php echo $this->Paginator->sort('file_path'); ?></th>
			<th><?php echo $this->Paginator->sort('mimetype'); ?></th>
			<th><?php echo $this->Paginator->sort('extension'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_model_name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_delete_from_library'); ?></th>
			<th><?php echo $this->Paginator->sort('is_use'); ?></th>
			<th><?php echo $this->Paginator->sort('is_wysiwyg'); ?></th>
			<th><?php echo $this->Paginator->sort('download_count'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('month'); ?></th>
			<th><?php echo $this->Paginator->sort('day'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($uploads as $upload): ?>
	<tr>
		<td><?php echo h($upload['Upload']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($upload['User']['id'], array('controller' => 'users', 'action' => 'view', $upload['User']['id'])); ?>
		</td>
		<td><?php echo h($upload['Upload']['file_name']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['alt']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['caption']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['description']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['file_size']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['file_path']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['mimetype']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['extension']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['plugin']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['upload_model_name']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['is_delete_from_library']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['is_use']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['is_wysiwyg']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['download_count']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['year']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['month']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['day']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['created']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['modified']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($upload['Upload']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $upload['Upload']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $upload['Upload']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $upload['Upload']['id']), null, __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('controller' => 'upload_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
