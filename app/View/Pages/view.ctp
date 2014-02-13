<div class="pages view">
<h2><?php echo __('Page'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($page['Page']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Root'); ?></dt>
		<dd>
			<?php echo h($page['Page']['root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($page['ParentPage']['id'], array('controller' => 'pages', 'action' => 'view', $page['ParentPage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thread Num'); ?></dt>
		<dd>
			<?php echo h($page['Page']['thread_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Sequence'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Name'); ?></dt>
		<dd>
			<?php echo h($page['Page']['page_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permalink'); ?></dt>
		<dd>
			<?php echo h($page['Page']['permalink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Flag'); ?></dt>
		<dd>
			<?php echo h($page['Page']['position_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($page['Page']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Page Meta Node'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_page_meta_node']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Page Style Node'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_page_style_node']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Page Layout Node'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_page_layout_node']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Page Theme Node'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_page_theme_node']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Page Column Node'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_page_column_node']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($page['Page']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($page['Page']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Count'); ?></dt>
		<dd>
			<?php echo h($page['Page']['show_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display From Date'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_from_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display To Date'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_to_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Apply Subpage'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_apply_subpage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Reverse Permalink'); ?></dt>
		<dd>
			<?php echo h($page['Page']['display_reverse_permalink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($page['Page']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lock Authority Num'); ?></dt>
		<dd>
			<?php echo h($page['Page']['lock_authority_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($page['Page']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($page['Page']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($page['Page']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($page['Page']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($page['Page']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($page['Page']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page'), array('action' => 'edit', $page['Page']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page'), array('action' => 'delete', $page['Page']['id']), null, __('Are you sure you want to delete # %s?', $page['Page']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Blocks'); ?></h3>
	<?php if (!empty($page['Block'])): ?>
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
	<?php foreach ($page['Block'] as $block): ?>
		<tr>
			<td><?php echo $block['id']; ?></td>
			<td><?php echo $block['page_id']; ?></td>
			<td><?php echo $block['content_id']; ?></td>
			<td><?php echo $block['module_id']; ?></td>
			<td><?php echo $block['title']; ?></td>
			<td><?php echo $block['show_title']; ?></td>
			<td><?php echo $block['controller_action']; ?></td>
			<td><?php echo $block['root']; ?></td>
			<td><?php echo $block['parent_id']; ?></td>
			<td><?php echo $block['thread_num']; ?></td>
			<td><?php echo $block['col_num']; ?></td>
			<td><?php echo $block['row_num']; ?></td>
			<td><?php echo $block['display_flag']; ?></td>
			<td><?php echo $block['display_from_date']; ?></td>
			<td><?php echo $block['display_to_date']; ?></td>
			<td><?php echo $block['theme_name']; ?></td>
			<td><?php echo $block['temp_name']; ?></td>
			<td><?php echo $block['left_margin']; ?></td>
			<td><?php echo $block['right_margin']; ?></td>
			<td><?php echo $block['top_margin']; ?></td>
			<td><?php echo $block['bottom_margin']; ?></td>
			<td><?php echo $block['min_width_size']; ?></td>
			<td><?php echo $block['min_height_size']; ?></td>
			<td><?php echo $block['lock_authority_num']; ?></td>
			<td><?php echo $block['created']; ?></td>
			<td><?php echo $block['created_user']; ?></td>
			<td><?php echo $block['created_user_name']; ?></td>
			<td><?php echo $block['modified']; ?></td>
			<td><?php echo $block['modified_user']; ?></td>
			<td><?php echo $block['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blocks', 'action' => 'view', $block['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blocks', 'action' => 'edit', $block['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blocks', 'action' => 'delete', $block['id']), null, __('Are you sure you want to delete # %s?', $block['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Columns'); ?></h3>
	<?php if (!empty($page['PageColumn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scope'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Header Page'); ?></th>
		<th><?php echo __('Left Page'); ?></th>
		<th><?php echo __('Right Page'); ?></th>
		<th><?php echo __('Footer Page'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageColumn'] as $pageColumn): ?>
		<tr>
			<td><?php echo $pageColumn['id']; ?></td>
			<td><?php echo $pageColumn['scope']; ?></td>
			<td><?php echo $pageColumn['type']; ?></td>
			<td><?php echo $pageColumn['lang']; ?></td>
			<td><?php echo $pageColumn['space_type']; ?></td>
			<td><?php echo $pageColumn['page_id']; ?></td>
			<td><?php echo $pageColumn['header_page']; ?></td>
			<td><?php echo $pageColumn['left_page']; ?></td>
			<td><?php echo $pageColumn['right_page']; ?></td>
			<td><?php echo $pageColumn['footer_page']; ?></td>
			<td><?php echo $pageColumn['created']; ?></td>
			<td><?php echo $pageColumn['created_user']; ?></td>
			<td><?php echo $pageColumn['created_user_name']; ?></td>
			<td><?php echo $pageColumn['modified']; ?></td>
			<td><?php echo $pageColumn['modified_user']; ?></td>
			<td><?php echo $pageColumn['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_columns', 'action' => 'view', $pageColumn['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_columns', 'action' => 'edit', $pageColumn['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_columns', 'action' => 'delete', $pageColumn['id']), null, __('Are you sure you want to delete # %s?', $pageColumn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Column'), array('controller' => 'page_columns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Layouts'); ?></h3>
	<?php if (!empty($page['PageLayout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scope'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Is Display Header'); ?></th>
		<th><?php echo __('Is Display Left'); ?></th>
		<th><?php echo __('Is Display Right'); ?></th>
		<th><?php echo __('Is Display Footer'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageLayout'] as $pageLayout): ?>
		<tr>
			<td><?php echo $pageLayout['id']; ?></td>
			<td><?php echo $pageLayout['scope']; ?></td>
			<td><?php echo $pageLayout['type']; ?></td>
			<td><?php echo $pageLayout['lang']; ?></td>
			<td><?php echo $pageLayout['space_type']; ?></td>
			<td><?php echo $pageLayout['page_id']; ?></td>
			<td><?php echo $pageLayout['is_display_header']; ?></td>
			<td><?php echo $pageLayout['is_display_left']; ?></td>
			<td><?php echo $pageLayout['is_display_right']; ?></td>
			<td><?php echo $pageLayout['is_display_footer']; ?></td>
			<td><?php echo $pageLayout['created']; ?></td>
			<td><?php echo $pageLayout['created_user']; ?></td>
			<td><?php echo $pageLayout['created_user_name']; ?></td>
			<td><?php echo $pageLayout['modified']; ?></td>
			<td><?php echo $pageLayout['modified_user']; ?></td>
			<td><?php echo $pageLayout['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_layouts', 'action' => 'view', $pageLayout['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_layouts', 'action' => 'edit', $pageLayout['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_layouts', 'action' => 'delete', $pageLayout['id']), null, __('Are you sure you want to delete # %s?', $pageLayout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Layout'), array('controller' => 'page_layouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Metas'); ?></h3>
	<?php if (!empty($page['PageMeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scope'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Meta Keywords'); ?></th>
		<th><?php echo __('Meta Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageMeta'] as $pageMeta): ?>
		<tr>
			<td><?php echo $pageMeta['id']; ?></td>
			<td><?php echo $pageMeta['scope']; ?></td>
			<td><?php echo $pageMeta['type']; ?></td>
			<td><?php echo $pageMeta['lang']; ?></td>
			<td><?php echo $pageMeta['space_type']; ?></td>
			<td><?php echo $pageMeta['page_id']; ?></td>
			<td><?php echo $pageMeta['title']; ?></td>
			<td><?php echo $pageMeta['meta_keywords']; ?></td>
			<td><?php echo $pageMeta['meta_description']; ?></td>
			<td><?php echo $pageMeta['created']; ?></td>
			<td><?php echo $pageMeta['created_user']; ?></td>
			<td><?php echo $pageMeta['created_user_name']; ?></td>
			<td><?php echo $pageMeta['modified']; ?></td>
			<td><?php echo $pageMeta['modified_user']; ?></td>
			<td><?php echo $pageMeta['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_metas', 'action' => 'view', $pageMeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_metas', 'action' => 'edit', $pageMeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_metas', 'action' => 'delete', $pageMeta['id']), null, __('Are you sure you want to delete # %s?', $pageMeta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Meta'), array('controller' => 'page_metas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Styles'); ?></h3>
	<?php if (!empty($page['PageStyle'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scope'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Align'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Original Background Image'); ?></th>
		<th><?php echo __('Original Background Repeat'); ?></th>
		<th><?php echo __('Original Background Position'); ?></th>
		<th><?php echo __('Original Background Attachment'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageStyle'] as $pageStyle): ?>
		<tr>
			<td><?php echo $pageStyle['id']; ?></td>
			<td><?php echo $pageStyle['scope']; ?></td>
			<td><?php echo $pageStyle['type']; ?></td>
			<td><?php echo $pageStyle['lang']; ?></td>
			<td><?php echo $pageStyle['space_type']; ?></td>
			<td><?php echo $pageStyle['page_id']; ?></td>
			<td><?php echo $pageStyle['align']; ?></td>
			<td><?php echo $pageStyle['width']; ?></td>
			<td><?php echo $pageStyle['height']; ?></td>
			<td><?php echo $pageStyle['original_background_image']; ?></td>
			<td><?php echo $pageStyle['original_background_repeat']; ?></td>
			<td><?php echo $pageStyle['original_background_position']; ?></td>
			<td><?php echo $pageStyle['original_background_attachment']; ?></td>
			<td><?php echo $pageStyle['file']; ?></td>
			<td><?php echo $pageStyle['created']; ?></td>
			<td><?php echo $pageStyle['created_user']; ?></td>
			<td><?php echo $pageStyle['created_user_name']; ?></td>
			<td><?php echo $pageStyle['modified']; ?></td>
			<td><?php echo $pageStyle['modified_user']; ?></td>
			<td><?php echo $pageStyle['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_styles', 'action' => 'view', $pageStyle['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_styles', 'action' => 'edit', $pageStyle['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_styles', 'action' => 'delete', $pageStyle['id']), null, __('Are you sure you want to delete # %s?', $pageStyle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Style'), array('controller' => 'page_styles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Sum Views'); ?></h3>
	<?php if (!empty($page['PageSumView'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Sum'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageSumView'] as $pageSumView): ?>
		<tr>
			<td><?php echo $pageSumView['id']; ?></td>
			<td><?php echo $pageSumView['user_id']; ?></td>
			<td><?php echo $pageSumView['page_id']; ?></td>
			<td><?php echo $pageSumView['sum']; ?></td>
			<td><?php echo $pageSumView['created']; ?></td>
			<td><?php echo $pageSumView['created_user']; ?></td>
			<td><?php echo $pageSumView['created_user_name']; ?></td>
			<td><?php echo $pageSumView['modified']; ?></td>
			<td><?php echo $pageSumView['modified_user']; ?></td>
			<td><?php echo $pageSumView['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_sum_views', 'action' => 'view', $pageSumView['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_sum_views', 'action' => 'edit', $pageSumView['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_sum_views', 'action' => 'delete', $pageSumView['id']), null, __('Are you sure you want to delete # %s?', $pageSumView['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Sum View'), array('controller' => 'page_sum_views', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Themes'); ?></h3>
	<?php if (!empty($page['PageTheme'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Scope'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Theme Name'); ?></th>
		<th><?php echo __('Temp Name'); ?></th>
		<th><?php echo __('Center Theme'); ?></th>
		<th><?php echo __('Header Theme'); ?></th>
		<th><?php echo __('Left Theme'); ?></th>
		<th><?php echo __('Right Theme'); ?></th>
		<th><?php echo __('Footer Theme'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['PageTheme'] as $pageTheme): ?>
		<tr>
			<td><?php echo $pageTheme['id']; ?></td>
			<td><?php echo $pageTheme['scope']; ?></td>
			<td><?php echo $pageTheme['type']; ?></td>
			<td><?php echo $pageTheme['lang']; ?></td>
			<td><?php echo $pageTheme['space_type']; ?></td>
			<td><?php echo $pageTheme['page_id']; ?></td>
			<td><?php echo $pageTheme['theme_name']; ?></td>
			<td><?php echo $pageTheme['temp_name']; ?></td>
			<td><?php echo $pageTheme['center_theme']; ?></td>
			<td><?php echo $pageTheme['header_theme']; ?></td>
			<td><?php echo $pageTheme['left_theme']; ?></td>
			<td><?php echo $pageTheme['right_theme']; ?></td>
			<td><?php echo $pageTheme['footer_theme']; ?></td>
			<td><?php echo $pageTheme['created']; ?></td>
			<td><?php echo $pageTheme['created_user']; ?></td>
			<td><?php echo $pageTheme['created_user_name']; ?></td>
			<td><?php echo $pageTheme['modified']; ?></td>
			<td><?php echo $pageTheme['modified_user']; ?></td>
			<td><?php echo $pageTheme['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_themes', 'action' => 'view', $pageTheme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_themes', 'action' => 'edit', $pageTheme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_themes', 'action' => 'delete', $pageTheme['id']), null, __('Are you sure you want to delete # %s?', $pageTheme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page Theme'), array('controller' => 'page_themes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pages'); ?></h3>
	<?php if (!empty($page['ChildPage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Root'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Thread Num'); ?></th>
		<th><?php echo __('Display Sequence'); ?></th>
		<th><?php echo __('Page Name'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Position Flag'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Is Page Meta Node'); ?></th>
		<th><?php echo __('Is Page Style Node'); ?></th>
		<th><?php echo __('Is Page Layout Node'); ?></th>
		<th><?php echo __('Is Page Theme Node'); ?></th>
		<th><?php echo __('Is Page Column Node'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Show Count'); ?></th>
		<th><?php echo __('Display Flag'); ?></th>
		<th><?php echo __('Display From Date'); ?></th>
		<th><?php echo __('Display To Date'); ?></th>
		<th><?php echo __('Display Apply Subpage'); ?></th>
		<th><?php echo __('Display Reverse Permalink'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('Lock Authority Num'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($page['ChildPage'] as $childPage): ?>
		<tr>
			<td><?php echo $childPage['id']; ?></td>
			<td><?php echo $childPage['root']; ?></td>
			<td><?php echo $childPage['parent_id']; ?></td>
			<td><?php echo $childPage['thread_num']; ?></td>
			<td><?php echo $childPage['display_sequence']; ?></td>
			<td><?php echo $childPage['page_name']; ?></td>
			<td><?php echo $childPage['permalink']; ?></td>
			<td><?php echo $childPage['position_flag']; ?></td>
			<td><?php echo $childPage['lang']; ?></td>
			<td><?php echo $childPage['is_page_meta_node']; ?></td>
			<td><?php echo $childPage['is_page_style_node']; ?></td>
			<td><?php echo $childPage['is_page_layout_node']; ?></td>
			<td><?php echo $childPage['is_page_theme_node']; ?></td>
			<td><?php echo $childPage['is_page_column_node']; ?></td>
			<td><?php echo $childPage['room_num']; ?></td>
			<td><?php echo $childPage['space_type']; ?></td>
			<td><?php echo $childPage['show_count']; ?></td>
			<td><?php echo $childPage['display_flag']; ?></td>
			<td><?php echo $childPage['display_from_date']; ?></td>
			<td><?php echo $childPage['display_to_date']; ?></td>
			<td><?php echo $childPage['display_apply_subpage']; ?></td>
			<td><?php echo $childPage['display_reverse_permalink']; ?></td>
			<td><?php echo $childPage['is_approved']; ?></td>
			<td><?php echo $childPage['lock_authority_num']; ?></td>
			<td><?php echo $childPage['created']; ?></td>
			<td><?php echo $childPage['created_user']; ?></td>
			<td><?php echo $childPage['created_user_name']; ?></td>
			<td><?php echo $childPage['modified']; ?></td>
			<td><?php echo $childPage['modified_user']; ?></td>
			<td><?php echo $childPage['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pages', 'action' => 'view', $childPage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pages', 'action' => 'edit', $childPage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pages', 'action' => 'delete', $childPage['id']), null, __('Are you sure you want to delete # %s?', $childPage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
