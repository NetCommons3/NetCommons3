<div class="modules view">
<h2><?php echo __('Module'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($module['Module']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Name'); ?></dt>
		<dd>
			<?php echo h($module['Module']['dir_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Version'); ?></dt>
		<dd>
			<?php echo h($module['Module']['version']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('System Flag'); ?></dt>
		<dd>
			<?php echo h($module['Module']['system_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disposition Flag'); ?></dt>
		<dd>
			<?php echo h($module['Module']['disposition_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller Action'); ?></dt>
		<dd>
			<?php echo h($module['Module']['controller_action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit Controller Action'); ?></dt>
		<dd>
			<?php echo h($module['Module']['edit_controller_action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Style Controller Action'); ?></dt>
		<dd>
			<?php echo h($module['Module']['style_controller_action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Sequence'); ?></dt>
		<dd>
			<?php echo h($module['Module']['display_sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module Icon'); ?></dt>
		<dd>
			<?php echo h($module['Module']['module_icon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Name'); ?></dt>
		<dd>
			<?php echo h($module['Module']['temp_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Has One'); ?></dt>
		<dd>
			<?php echo h($module['Module']['content_has_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Copy Operation'); ?></dt>
		<dd>
			<?php echo h($module['Module']['copy_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shortcut Operation'); ?></dt>
		<dd>
			<?php echo h($module['Module']['shortcut_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Move Operation'); ?></dt>
		<dd>
			<?php echo h($module['Module']['move_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($module['Module']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($module['Module']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($module['Module']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($module['Module']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($module['Module']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($module['Module']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module'), array('action' => 'edit', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Module'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Config Langs'), array('controller' => 'config_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config Lang'), array('controller' => 'config_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('controller' => 'configs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Archives'); ?></h3>
	<?php if (!empty($module['Archive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Model Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Search Content'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['Archive'] as $archive): ?>
		<tr>
			<td><?php echo $archive['id']; ?></td>
			<td><?php echo $archive['parent_model_name']; ?></td>
			<td><?php echo $archive['parent_id']; ?></td>
			<td><?php echo $archive['module_id']; ?></td>
			<td><?php echo $archive['content_id']; ?></td>
			<td><?php echo $archive['model_name']; ?></td>
			<td><?php echo $archive['plugin_unique']; ?></td>
			<td><?php echo $archive['status']; ?></td>
			<td><?php echo $archive['is_approved']; ?></td>
			<td><?php echo $archive['user_group_id']; ?></td>
			<td><?php echo $archive['access_hierarchy']; ?></td>
			<td><?php echo $archive['count']; ?></td>
			<td><?php echo $archive['title']; ?></td>
			<td><?php echo $archive['content']; ?></td>
			<td><?php echo $archive['search_content']; ?></td>
			<td><?php echo $archive['url']; ?></td>
			<td><?php echo $archive['created']; ?></td>
			<td><?php echo $archive['created_user']; ?></td>
			<td><?php echo $archive['created_user_name']; ?></td>
			<td><?php echo $archive['modified']; ?></td>
			<td><?php echo $archive['modified_user']; ?></td>
			<td><?php echo $archive['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'archives', 'action' => 'view', $archive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'archives', 'action' => 'edit', $archive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'archives', 'action' => 'delete', $archive['id']), null, __('Are you sure you want to delete # %s?', $archive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blocks'); ?></h3>
	<?php if (!empty($module['Block'])): ?>
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
	<?php foreach ($module['Block'] as $block): ?>
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
	<h3><?php echo __('Related Config Langs'); ?></h3>
	<?php if (!empty($module['ConfigLang'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Config Name'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['ConfigLang'] as $configLang): ?>
		<tr>
			<td><?php echo $configLang['id']; ?></td>
			<td><?php echo $configLang['module_id']; ?></td>
			<td><?php echo $configLang['config_name']; ?></td>
			<td><?php echo $configLang['lang']; ?></td>
			<td><?php echo $configLang['value']; ?></td>
			<td><?php echo $configLang['created']; ?></td>
			<td><?php echo $configLang['created_user']; ?></td>
			<td><?php echo $configLang['created_user_name']; ?></td>
			<td><?php echo $configLang['modified']; ?></td>
			<td><?php echo $configLang['modified_user']; ?></td>
			<td><?php echo $configLang['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'config_langs', 'action' => 'view', $configLang['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'config_langs', 'action' => 'edit', $configLang['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'config_langs', 'action' => 'delete', $configLang['id']), null, __('Are you sure you want to delete # %s?', $configLang['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Config Lang'), array('controller' => 'config_langs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Configs'); ?></h3>
	<?php if (!empty($module['Config'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Domain'); ?></th>
		<th><?php echo __('Attribute'); ?></th>
		<th><?php echo __('Required'); ?></th>
		<th><?php echo __('Minlength'); ?></th>
		<th><?php echo __('Maxlength'); ?></th>
		<th><?php echo __('Regexp'); ?></th>
		<th><?php echo __('Lang Flag'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['Config'] as $config): ?>
		<tr>
			<td><?php echo $config['id']; ?></td>
			<td><?php echo $config['module_id']; ?></td>
			<td><?php echo $config['category']; ?></td>
			<td><?php echo $config['name']; ?></td>
			<td><?php echo $config['type']; ?></td>
			<td><?php echo $config['title']; ?></td>
			<td><?php echo $config['value']; ?></td>
			<td><?php echo $config['description']; ?></td>
			<td><?php echo $config['options']; ?></td>
			<td><?php echo $config['domain']; ?></td>
			<td><?php echo $config['attribute']; ?></td>
			<td><?php echo $config['required']; ?></td>
			<td><?php echo $config['minlength']; ?></td>
			<td><?php echo $config['maxlength']; ?></td>
			<td><?php echo $config['regexp']; ?></td>
			<td><?php echo $config['lang_flag']; ?></td>
			<td><?php echo $config['created']; ?></td>
			<td><?php echo $config['created_user']; ?></td>
			<td><?php echo $config['created_user_name']; ?></td>
			<td><?php echo $config['modified']; ?></td>
			<td><?php echo $config['modified_user']; ?></td>
			<td><?php echo $config['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'configs', 'action' => 'view', $config['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'configs', 'action' => 'edit', $config['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'configs', 'action' => 'delete', $config['id']), null, __('Are you sure you want to delete # %s?', $config['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contents'); ?></h3>
	<?php if (!empty($module['Content'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Shortcut Type'); ?></th>
		<th><?php echo __('Root'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('Display Flag'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['Content'] as $content): ?>
		<tr>
			<td><?php echo $content['id']; ?></td>
			<td><?php echo $content['module_id']; ?></td>
			<td><?php echo $content['title']; ?></td>
			<td><?php echo $content['shortcut_type']; ?></td>
			<td><?php echo $content['root']; ?></td>
			<td><?php echo $content['room_num']; ?></td>
			<td><?php echo $content['display_flag']; ?></td>
			<td><?php echo $content['is_approved']; ?></td>
			<td><?php echo $content['url']; ?></td>
			<td><?php echo $content['created']; ?></td>
			<td><?php echo $content['created_user']; ?></td>
			<td><?php echo $content['created_user_name']; ?></td>
			<td><?php echo $content['modified']; ?></td>
			<td><?php echo $content['modified_user']; ?></td>
			<td><?php echo $content['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contents', 'action' => 'view', $content['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contents', 'action' => 'edit', $content['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contents', 'action' => 'delete', $content['id']), null, __('Are you sure you want to delete # %s?', $content['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Module Links'); ?></h3>
	<?php if (!empty($module['ModuleLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Space Type'); ?></th>
		<th><?php echo __('Authority Id'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['ModuleLink'] as $moduleLink): ?>
		<tr>
			<td><?php echo $moduleLink['id']; ?></td>
			<td><?php echo $moduleLink['space_type']; ?></td>
			<td><?php echo $moduleLink['authority_id']; ?></td>
			<td><?php echo $moduleLink['room_num']; ?></td>
			<td><?php echo $moduleLink['module_id']; ?></td>
			<td><?php echo $moduleLink['created']; ?></td>
			<td><?php echo $moduleLink['created_user']; ?></td>
			<td><?php echo $moduleLink['created_user_name']; ?></td>
			<td><?php echo $moduleLink['modified']; ?></td>
			<td><?php echo $moduleLink['modified_user']; ?></td>
			<td><?php echo $moduleLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'module_links', 'action' => 'view', $moduleLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'module_links', 'action' => 'edit', $moduleLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'module_links', 'action' => 'delete', $moduleLink['id']), null, __('Are you sure you want to delete # %s?', $moduleLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Module System Links'); ?></h3>
	<?php if (!empty($module['ModuleSystemLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Authority Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Hierarchy'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['ModuleSystemLink'] as $moduleSystemLink): ?>
		<tr>
			<td><?php echo $moduleSystemLink['id']; ?></td>
			<td><?php echo $moduleSystemLink['authority_id']; ?></td>
			<td><?php echo $moduleSystemLink['module_id']; ?></td>
			<td><?php echo $moduleSystemLink['hierarchy']; ?></td>
			<td><?php echo $moduleSystemLink['created']; ?></td>
			<td><?php echo $moduleSystemLink['created_user']; ?></td>
			<td><?php echo $moduleSystemLink['created_user_name']; ?></td>
			<td><?php echo $moduleSystemLink['modified']; ?></td>
			<td><?php echo $moduleSystemLink['modified_user']; ?></td>
			<td><?php echo $moduleSystemLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'module_system_links', 'action' => 'view', $moduleSystemLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'module_system_links', 'action' => 'edit', $moduleSystemLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'module_system_links', 'action' => 'delete', $moduleSystemLink['id']), null, __('Are you sure you want to delete # %s?', $moduleSystemLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Groups'); ?></h3>
	<?php if (!empty($module['UserGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($module['UserGroup'] as $userGroup): ?>
		<tr>
			<td><?php echo $userGroup['id']; ?></td>
			<td><?php echo $userGroup['module_id']; ?></td>
			<td><?php echo $userGroup['content_id']; ?></td>
			<td><?php echo $userGroup['name']; ?></td>
			<td><?php echo $userGroup['created']; ?></td>
			<td><?php echo $userGroup['created_user']; ?></td>
			<td><?php echo $userGroup['created_user_name']; ?></td>
			<td><?php echo $userGroup['modified']; ?></td>
			<td><?php echo $userGroup['modified_user']; ?></td>
			<td><?php echo $userGroup['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_groups', 'action' => 'view', $userGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_groups', 'action' => 'edit', $userGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_groups', 'action' => 'delete', $userGroup['id']), null, __('Are you sure you want to delete # %s?', $userGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
