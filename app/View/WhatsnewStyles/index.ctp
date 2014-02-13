<div class="whatsnewStyles index">
	<h2><?php echo __('Whatsnew Styles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('block_id'); ?></th>
			<th><?php echo $this->Paginator->sort('display_type'); ?></th>
			<th><?php echo $this->Paginator->sort('display_period_type'); ?></th>
			<th><?php echo $this->Paginator->sort('display_days'); ?></th>
			<th><?php echo $this->Paginator->sort('display_number'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_title'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_description'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_room_name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_module_name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_display_created'); ?></th>
			<th><?php echo $this->Paginator->sort('title_truncate_num'); ?></th>
			<th><?php echo $this->Paginator->sort('description_truncate_num'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_rss_feed'); ?></th>
			<th><?php echo $this->Paginator->sort('display_modules'); ?></th>
			<th><?php echo $this->Paginator->sort('myportal_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('myroom_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('select_myportal_users'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($whatsnewStyles as $whatsnewStyle): ?>
	<tr>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($whatsnewStyle['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $whatsnewStyle['Block']['id'])); ?>
		</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['display_type']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['display_period_type']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['display_days']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['display_number']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_title']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_description']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_room_name']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_module_name']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_user_name']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_created']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['title_truncate_num']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['description_truncate_num']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['allow_rss_feed']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['display_modules']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['myportal_flag']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['myroom_flag']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['select_myportal_users']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['created']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['modified']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($whatsnewStyle['WhatsnewStyle']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $whatsnewStyle['WhatsnewStyle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $whatsnewStyle['WhatsnewStyle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $whatsnewStyle['WhatsnewStyle']['id']), null, __('Are you sure you want to delete # %s?', $whatsnewStyle['WhatsnewStyle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Whatsnew Style'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
