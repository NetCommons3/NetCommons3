<div class="blocks view">
<h2><?php echo __('Block'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($block['Block']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($block['Page']['id'], array('controller' => 'pages', 'action' => 'view', $block['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($block['Content']['title'], array('controller' => 'contents', 'action' => 'view', $block['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($block['Module']['id'], array('controller' => 'modules', 'action' => 'view', $block['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($block['Block']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Title'); ?></dt>
		<dd>
			<?php echo h($block['Block']['show_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller Action'); ?></dt>
		<dd>
			<?php echo h($block['Block']['controller_action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Root'); ?></dt>
		<dd>
			<?php echo h($block['Block']['root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($block['ParentBlock']['title'], array('controller' => 'blocks', 'action' => 'view', $block['ParentBlock']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thread Num'); ?></dt>
		<dd>
			<?php echo h($block['Block']['thread_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col Num'); ?></dt>
		<dd>
			<?php echo h($block['Block']['col_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Num'); ?></dt>
		<dd>
			<?php echo h($block['Block']['row_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($block['Block']['display_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display From Date'); ?></dt>
		<dd>
			<?php echo h($block['Block']['display_from_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display To Date'); ?></dt>
		<dd>
			<?php echo h($block['Block']['display_to_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme Name'); ?></dt>
		<dd>
			<?php echo h($block['Block']['theme_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Name'); ?></dt>
		<dd>
			<?php echo h($block['Block']['temp_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Left Margin'); ?></dt>
		<dd>
			<?php echo h($block['Block']['left_margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Right Margin'); ?></dt>
		<dd>
			<?php echo h($block['Block']['right_margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Top Margin'); ?></dt>
		<dd>
			<?php echo h($block['Block']['top_margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom Margin'); ?></dt>
		<dd>
			<?php echo h($block['Block']['bottom_margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Width Size'); ?></dt>
		<dd>
			<?php echo h($block['Block']['min_width_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Height Size'); ?></dt>
		<dd>
			<?php echo h($block['Block']['min_height_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lock Authority Num'); ?></dt>
		<dd>
			<?php echo h($block['Block']['lock_authority_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($block['Block']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($block['Block']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($block['Block']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($block['Block']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($block['Block']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($block['Block']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Block'), array('action' => 'edit', $block['Block']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Block'), array('action' => 'delete', $block['Block']['id']), null, __('Are you sure you want to delete # %s?', $block['Block']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Blocks'); ?></h3>
	<?php if (!empty($block['ChildBlock'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Show Title'); ?></th>
		<th><?php echo __('Controller Action'); ?></th>
		<th><?php echo __('Root'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Thread Num'); ?></th>
		<th><?php echo __('Col Num'); ?></th>
		<th><?php echo __('Row Num'); ?></th>
		<th><?php echo __('Display Flag'); ?></th>
		<th><?php echo __('Display From Date'); ?></th>
		<th><?php echo __('Display To Date'); ?></th>
		<th><?php echo __('Theme Name'); ?></th>
		<th><?php echo __('Temp Name'); ?></th>
		<th><?php echo __('Left Margin'); ?></th>
		<th><?php echo __('Right Margin'); ?></th>
		<th><?php echo __('Top Margin'); ?></th>
		<th><?php echo __('Bottom Margin'); ?></th>
		<th><?php echo __('Min Width Size'); ?></th>
		<th><?php echo __('Min Height Size'); ?></th>
		<th><?php echo __('Lock Authority Num'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($block['ChildBlock'] as $childBlock): ?>
		<tr>
			<td><?php echo $childBlock['id']; ?></td>
			<td><?php echo $childBlock['page_id']; ?></td>
			<td><?php echo $childBlock['content_id']; ?></td>
			<td><?php echo $childBlock['module_id']; ?></td>
			<td><?php echo $childBlock['title']; ?></td>
			<td><?php echo $childBlock['show_title']; ?></td>
			<td><?php echo $childBlock['controller_action']; ?></td>
			<td><?php echo $childBlock['root']; ?></td>
			<td><?php echo $childBlock['parent_id']; ?></td>
			<td><?php echo $childBlock['thread_num']; ?></td>
			<td><?php echo $childBlock['col_num']; ?></td>
			<td><?php echo $childBlock['row_num']; ?></td>
			<td><?php echo $childBlock['display_flag']; ?></td>
			<td><?php echo $childBlock['display_from_date']; ?></td>
			<td><?php echo $childBlock['display_to_date']; ?></td>
			<td><?php echo $childBlock['theme_name']; ?></td>
			<td><?php echo $childBlock['temp_name']; ?></td>
			<td><?php echo $childBlock['left_margin']; ?></td>
			<td><?php echo $childBlock['right_margin']; ?></td>
			<td><?php echo $childBlock['top_margin']; ?></td>
			<td><?php echo $childBlock['bottom_margin']; ?></td>
			<td><?php echo $childBlock['min_width_size']; ?></td>
			<td><?php echo $childBlock['min_height_size']; ?></td>
			<td><?php echo $childBlock['lock_authority_num']; ?></td>
			<td><?php echo $childBlock['created']; ?></td>
			<td><?php echo $childBlock['created_user']; ?></td>
			<td><?php echo $childBlock['created_user_name']; ?></td>
			<td><?php echo $childBlock['modified']; ?></td>
			<td><?php echo $childBlock['modified_user']; ?></td>
			<td><?php echo $childBlock['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blocks', 'action' => 'view', $childBlock['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blocks', 'action' => 'edit', $childBlock['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blocks', 'action' => 'delete', $childBlock['id']), null, __('Are you sure you want to delete # %s?', $childBlock['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Styles'); ?></h3>
	<?php if (!empty($block['BlogStyle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Block Id'); ?></th>
		<th><?php echo __('Widget Type'); ?></th>
		<th><?php echo __('Display Flag'); ?></th>
		<th><?php echo __('Col Num'); ?></th>
		<th><?php echo __('Row Num'); ?></th>
		<th><?php echo __('Visible Item'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($block['BlogStyle'] as $blogStyle): ?>
		<tr>
			<td><?php echo $blogStyle['id']; ?></td>
			<td><?php echo $blogStyle['block_id']; ?></td>
			<td><?php echo $blogStyle['widget_type']; ?></td>
			<td><?php echo $blogStyle['display_flag']; ?></td>
			<td><?php echo $blogStyle['col_num']; ?></td>
			<td><?php echo $blogStyle['row_num']; ?></td>
			<td><?php echo $blogStyle['visible_item']; ?></td>
			<td><?php echo $blogStyle['options']; ?></td>
			<td><?php echo $blogStyle['created']; ?></td>
			<td><?php echo $blogStyle['created_user']; ?></td>
			<td><?php echo $blogStyle['created_user_name']; ?></td>
			<td><?php echo $blogStyle['modified']; ?></td>
			<td><?php echo $blogStyle['modified_user']; ?></td>
			<td><?php echo $blogStyle['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_styles', 'action' => 'view', $blogStyle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_styles', 'action' => 'edit', $blogStyle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_styles', 'action' => 'delete', $blogStyle['id']), null, __('Are you sure you want to delete # %s?', $blogStyle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog Style'), array('controller' => 'blog_styles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Whatsnew Select Rooms'); ?></h3>
	<?php if (!empty($block['WhatsnewSelectRoom'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Block Id'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($block['WhatsnewSelectRoom'] as $whatsnewSelectRoom): ?>
		<tr>
			<td><?php echo $whatsnewSelectRoom['id']; ?></td>
			<td><?php echo $whatsnewSelectRoom['block_id']; ?></td>
			<td><?php echo $whatsnewSelectRoom['room_num']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'whatsnew_select_rooms', 'action' => 'view', $whatsnewSelectRoom['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'whatsnew_select_rooms', 'action' => 'edit', $whatsnewSelectRoom['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'whatsnew_select_rooms', 'action' => 'delete', $whatsnewSelectRoom['id']), null, __('Are you sure you want to delete # %s?', $whatsnewSelectRoom['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Whatsnew Select Room'), array('controller' => 'whatsnew_select_rooms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Whatsnew Select Users'); ?></h3>
	<?php if (!empty($block['WhatsnewSelectUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Block Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($block['WhatsnewSelectUser'] as $whatsnewSelectUser): ?>
		<tr>
			<td><?php echo $whatsnewSelectUser['id']; ?></td>
			<td><?php echo $whatsnewSelectUser['block_id']; ?></td>
			<td><?php echo $whatsnewSelectUser['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'whatsnew_select_users', 'action' => 'view', $whatsnewSelectUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'whatsnew_select_users', 'action' => 'edit', $whatsnewSelectUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'whatsnew_select_users', 'action' => 'delete', $whatsnewSelectUser['id']), null, __('Are you sure you want to delete # %s?', $whatsnewSelectUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Whatsnew Select User'), array('controller' => 'whatsnew_select_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Whatsnew Styles'); ?></h3>
	<?php if (!empty($block['WhatsnewStyle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Block Id'); ?></th>
		<th><?php echo __('Display Type'); ?></th>
		<th><?php echo __('Display Period Type'); ?></th>
		<th><?php echo __('Display Days'); ?></th>
		<th><?php echo __('Display Number'); ?></th>
		<th><?php echo __('Is Display Title'); ?></th>
		<th><?php echo __('Is Display Description'); ?></th>
		<th><?php echo __('Is Display Room Name'); ?></th>
		<th><?php echo __('Is Display Module Name'); ?></th>
		<th><?php echo __('Is Display User Name'); ?></th>
		<th><?php echo __('Is Display Created'); ?></th>
		<th><?php echo __('Title Truncate Num'); ?></th>
		<th><?php echo __('Description Truncate Num'); ?></th>
		<th><?php echo __('Allow Rss Feed'); ?></th>
		<th><?php echo __('Display Modules'); ?></th>
		<th><?php echo __('Myportal Flag'); ?></th>
		<th><?php echo __('Myroom Flag'); ?></th>
		<th><?php echo __('Select Myportal Users'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($block['WhatsnewStyle'] as $whatsnewStyle): ?>
		<tr>
			<td><?php echo $whatsnewStyle['id']; ?></td>
			<td><?php echo $whatsnewStyle['block_id']; ?></td>
			<td><?php echo $whatsnewStyle['display_type']; ?></td>
			<td><?php echo $whatsnewStyle['display_period_type']; ?></td>
			<td><?php echo $whatsnewStyle['display_days']; ?></td>
			<td><?php echo $whatsnewStyle['display_number']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_title']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_description']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_room_name']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_module_name']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_user_name']; ?></td>
			<td><?php echo $whatsnewStyle['is_display_created']; ?></td>
			<td><?php echo $whatsnewStyle['title_truncate_num']; ?></td>
			<td><?php echo $whatsnewStyle['description_truncate_num']; ?></td>
			<td><?php echo $whatsnewStyle['allow_rss_feed']; ?></td>
			<td><?php echo $whatsnewStyle['display_modules']; ?></td>
			<td><?php echo $whatsnewStyle['myportal_flag']; ?></td>
			<td><?php echo $whatsnewStyle['myroom_flag']; ?></td>
			<td><?php echo $whatsnewStyle['select_myportal_users']; ?></td>
			<td><?php echo $whatsnewStyle['created']; ?></td>
			<td><?php echo $whatsnewStyle['created_user']; ?></td>
			<td><?php echo $whatsnewStyle['created_user_name']; ?></td>
			<td><?php echo $whatsnewStyle['modified']; ?></td>
			<td><?php echo $whatsnewStyle['modified_user']; ?></td>
			<td><?php echo $whatsnewStyle['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'whatsnew_styles', 'action' => 'view', $whatsnewStyle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'whatsnew_styles', 'action' => 'edit', $whatsnewStyle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'whatsnew_styles', 'action' => 'delete', $whatsnewStyle['id']), null, __('Are you sure you want to delete # %s?', $whatsnewStyle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Whatsnew Style'), array('controller' => 'whatsnew_styles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
