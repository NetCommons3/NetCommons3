<div class="blocks index">
	<h2><?php echo __('Blocks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('show_title'); ?></th>
			<th><?php echo $this->Paginator->sort('controller_action'); ?></th>
			<th><?php echo $this->Paginator->sort('root'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('thread_num'); ?></th>
			<th><?php echo $this->Paginator->sort('col_num'); ?></th>
			<th><?php echo $this->Paginator->sort('row_num'); ?></th>
			<th><?php echo $this->Paginator->sort('display_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('display_from_date'); ?></th>
			<th><?php echo $this->Paginator->sort('display_to_date'); ?></th>
			<th><?php echo $this->Paginator->sort('theme_name'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_name'); ?></th>
			<th><?php echo $this->Paginator->sort('left_margin'); ?></th>
			<th><?php echo $this->Paginator->sort('right_margin'); ?></th>
			<th><?php echo $this->Paginator->sort('top_margin'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom_margin'); ?></th>
			<th><?php echo $this->Paginator->sort('min_width_size'); ?></th>
			<th><?php echo $this->Paginator->sort('min_height_size'); ?></th>
			<th><?php echo $this->Paginator->sort('lock_authority_num'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blocks as $block): ?>
	<tr>
		<td><?php echo h($block['Block']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($block['Page']['id'], array('controller' => 'pages', 'action' => 'view', $block['Page']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($block['Content']['title'], array('controller' => 'contents', 'action' => 'view', $block['Content']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($block['Module']['id'], array('controller' => 'modules', 'action' => 'view', $block['Module']['id'])); ?>
		</td>
		<td><?php echo h($block['Block']['title']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['show_title']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['controller_action']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['root']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($block['ParentBlock']['title'], array('controller' => 'blocks', 'action' => 'view', $block['ParentBlock']['id'])); ?>
		</td>
		<td><?php echo h($block['Block']['thread_num']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['col_num']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['row_num']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['display_flag']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['display_from_date']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['display_to_date']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['theme_name']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['temp_name']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['left_margin']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['right_margin']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['top_margin']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['bottom_margin']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['min_width_size']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['min_height_size']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['lock_authority_num']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['created']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['modified']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($block['Block']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $block['Block']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $block['Block']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $block['Block']['id']), null, __('Are you sure you want to delete # %s?', $block['Block']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Block'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Styles'), array('controller' => 'blog_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Style'), array('controller' => 'blog_styles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Rooms'), array('controller' => 'whatsnew_select_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select Room'), array('controller' => 'whatsnew_select_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Users'), array('controller' => 'whatsnew_select_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select User'), array('controller' => 'whatsnew_select_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Styles'), array('controller' => 'whatsnew_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Style'), array('controller' => 'whatsnew_styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
