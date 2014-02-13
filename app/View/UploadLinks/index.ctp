<div class="uploadLinks index">
	<h2><?php echo __('Upload Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('upload_id'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin_unique'); ?></th>
			<th><?php echo $this->Paginator->sort('model_name'); ?></th>
			<th><?php echo $this->Paginator->sort('field_name'); ?></th>
			<th><?php echo $this->Paginator->sort('access_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('is_use'); ?></th>
			<th><?php echo $this->Paginator->sort('download_password'); ?></th>
			<th><?php echo $this->Paginator->sort('check_component_action'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($uploadLinks as $uploadLink): ?>
	<tr>
		<td><?php echo h($uploadLink['UploadLink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uploadLink['Upload']['id'], array('controller' => 'uploads', 'action' => 'view', $uploadLink['Upload']['id'])); ?>
		</td>
		<td><?php echo h($uploadLink['UploadLink']['plugin']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uploadLink['Content']['title'], array('controller' => 'contents', 'action' => 'view', $uploadLink['Content']['id'])); ?>
		</td>
		<td><?php echo h($uploadLink['UploadLink']['plugin_unique']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['model_name']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['field_name']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['access_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['is_use']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['download_password']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['check_component_action']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['created']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($uploadLink['UploadLink']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $uploadLink['UploadLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $uploadLink['UploadLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $uploadLink['UploadLink']['id']), null, __('Are you sure you want to delete # %s?', $uploadLink['UploadLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Upload Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
