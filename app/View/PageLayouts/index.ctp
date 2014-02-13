<div class="pageLayouts index">
	<h2><?php echo __('Page Layouts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('scope'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('space_type'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_header'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_left'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_right'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_footer'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageLayouts as $pageLayout): ?>
	<tr>
		<td><?php echo h($pageLayout['PageLayout']['id']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['scope']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['type']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['lang']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['space_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pageLayout['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageLayout['Page']['id'])); ?>
		</td>
		<td><?php echo h($pageLayout['PageLayout']['is_display_header']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['is_display_left']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['is_display_right']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['is_display_footer']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['created']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($pageLayout['PageLayout']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pageLayout['PageLayout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pageLayout['PageLayout']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pageLayout['PageLayout']['id']), null, __('Are you sure you want to delete # %s?', $pageLayout['PageLayout']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page Layout'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
