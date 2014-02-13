<div class="archives index">
	<h2><?php echo __('Archives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_model_name'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('model_name'); ?></th>
			<th><?php echo $this->Paginator->sort('plugin_unique'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('is_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('user_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('access_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('count'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('search_content'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($archives as $archive): ?>
	<tr>
		<td><?php echo h($archive['Archive']['id']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['parent_model_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($archive['ParentArchive']['title'], array('controller' => 'archives', 'action' => 'view', $archive['ParentArchive']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($archive['Module']['id'], array('controller' => 'modules', 'action' => 'view', $archive['Module']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($archive['Content']['title'], array('controller' => 'contents', 'action' => 'view', $archive['Content']['id'])); ?>
		</td>
		<td><?php echo h($archive['Archive']['model_name']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['plugin_unique']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['status']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['is_approved']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($archive['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $archive['UserGroup']['id'])); ?>
		</td>
		<td><?php echo h($archive['Archive']['access_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['count']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['title']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['content']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['search_content']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['url']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['created']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['modified']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($archive['Archive']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $archive['Archive']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $archive['Archive']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $archive['Archive']['id']), null, __('Are you sure you want to delete # %s?', $archive['Archive']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Archive'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
