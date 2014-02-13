<div class="blogStyles index">
	<h2><?php echo __('Blog Styles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('block_id'); ?></th>
			<th><?php echo $this->Paginator->sort('widget_type'); ?></th>
			<th><?php echo $this->Paginator->sort('display_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('col_num'); ?></th>
			<th><?php echo $this->Paginator->sort('row_num'); ?></th>
			<th><?php echo $this->Paginator->sort('visible_item'); ?></th>
			<th><?php echo $this->Paginator->sort('options'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogStyles as $blogStyle): ?>
	<tr>
		<td><?php echo h($blogStyle['BlogStyle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blogStyle['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $blogStyle['Block']['id'])); ?>
		</td>
		<td><?php echo h($blogStyle['BlogStyle']['widget_type']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['display_flag']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['col_num']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['row_num']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['visible_item']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['options']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blogStyle['BlogStyle']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogStyle['BlogStyle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogStyle['BlogStyle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogStyle['BlogStyle']['id']), null, __('Are you sure you want to delete # %s?', $blogStyle['BlogStyle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog Style'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
