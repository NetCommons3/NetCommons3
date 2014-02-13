<div class="pageThemes index">
	<h2><?php echo __('Page Themes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('scope'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('space_type'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('theme_name'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_name'); ?></th>
			<th><?php echo $this->Paginator->sort('center_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('header_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('left_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('right_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('footer_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageThemes as $pageTheme): ?>
	<tr>
		<td><?php echo h($pageTheme['PageTheme']['id']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['scope']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['type']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['lang']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['space_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pageTheme['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageTheme['Page']['id'])); ?>
		</td>
		<td><?php echo h($pageTheme['PageTheme']['theme_name']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['temp_name']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['center_theme']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['header_theme']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['left_theme']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['right_theme']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['footer_theme']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['created']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($pageTheme['PageTheme']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pageTheme['PageTheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pageTheme['PageTheme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pageTheme['PageTheme']['id']), null, __('Are you sure you want to delete # %s?', $pageTheme['PageTheme']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page Theme'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
