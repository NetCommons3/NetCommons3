<div class="pages index">
	<h2><?php echo __('Pages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('root'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('thread_num'); ?></th>
			<th><?php echo $this->Paginator->sort('display_sequence'); ?></th>
			<th><?php echo $this->Paginator->sort('page_name'); ?></th>
			<th><?php echo $this->Paginator->sort('permalink'); ?></th>
			<th><?php echo $this->Paginator->sort('position_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('is_page_meta_node'); ?></th>
			<th><?php echo $this->Paginator->sort('is_page_style_node'); ?></th>
			<th><?php echo $this->Paginator->sort('is_page_layout_node'); ?></th>
			<th><?php echo $this->Paginator->sort('is_page_theme_node'); ?></th>
			<th><?php echo $this->Paginator->sort('is_page_column_node'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('space_type'); ?></th>
			<th><?php echo $this->Paginator->sort('show_count'); ?></th>
			<th><?php echo $this->Paginator->sort('display_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('display_from_date'); ?></th>
			<th><?php echo $this->Paginator->sort('display_to_date'); ?></th>
			<th><?php echo $this->Paginator->sort('display_apply_subpage'); ?></th>
			<th><?php echo $this->Paginator->sort('display_reverse_permalink'); ?></th>
			<th><?php echo $this->Paginator->sort('is_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('lock_authority_num'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pages as $page): ?>
	<tr>
		<td><?php echo h($page['Page']['id']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['root']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($page['ParentPage']['id'], array('controller' => 'pages', 'action' => 'view', $page['ParentPage']['id'])); ?>
		</td>
		<td><?php echo h($page['Page']['thread_num']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_sequence']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['page_name']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['permalink']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['position_flag']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['lang']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_page_meta_node']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_page_style_node']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_page_layout_node']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_page_theme_node']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_page_column_node']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['room_num']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['space_type']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['show_count']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_flag']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_from_date']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_to_date']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_apply_subpage']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['display_reverse_permalink']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['is_approved']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['lock_authority_num']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['created']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['modified']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($page['Page']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $page['Page']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $page['Page']['id']), null, __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Columns'), array('controller' => 'page_columns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Column'), array('controller' => 'page_columns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Layouts'), array('controller' => 'page_layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Layout'), array('controller' => 'page_layouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Metas'), array('controller' => 'page_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Meta'), array('controller' => 'page_metas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Styles'), array('controller' => 'page_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Style'), array('controller' => 'page_styles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Sum Views'), array('controller' => 'page_sum_views', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('controller' => 'page_sum_views', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Themes'), array('controller' => 'page_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Theme'), array('controller' => 'page_themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
