<div class="authorities view">
<h2><?php echo __('Authority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Name'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['default_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('System Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['system_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hierarchy'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Creating Community'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_creating_community']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow New Participant'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_new_participant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myportal Use Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['myportal_use_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Myportal Viewing Hierarchy'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_myportal_viewing_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Use Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['private_use_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public Createroom Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['public_createroom_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Createroom Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['group_createroom_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myportal Createroom Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['myportal_createroom_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Createroom Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['private_createroom_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Htmltag Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_htmltag_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Meta Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_meta_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Theme Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_theme_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Style Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_style_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Layout Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_layout_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Column Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_column_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Attachment'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_attachment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Video'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_video']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Size'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['max_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Leftcolumn Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['change_leftcolumn_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Rightcolumn Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['change_rightcolumn_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Headercolumn Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['change_headercolumn_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Change Footercolumn Flag'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['change_footercolumn_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Participants Editing'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['display_participants_editing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Move Operation'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_move_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Copy Operation'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_copy_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Shortcut Operation'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_shortcut_operation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Operation Of Shortcut'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['allow_operation_of_shortcut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($authority['Authority']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Authority'), array('action' => 'edit', $authority['Authority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Authority'), array('action' => 'delete', $authority['Authority']['id']), null, __('Are you sure you want to delete # %s?', $authority['Authority']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authority Langs'), array('controller' => 'authority_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority Lang'), array('controller' => 'authority_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('controller' => 'page_user_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Authority Langs'); ?></h3>
	<?php if (!empty($authority['AuthorityLang'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Authority Id'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authority['AuthorityLang'] as $authorityLang): ?>
		<tr>
			<td><?php echo $authorityLang['id']; ?></td>
			<td><?php echo $authorityLang['authority_id']; ?></td>
			<td><?php echo $authorityLang['lang']; ?></td>
			<td><?php echo $authorityLang['name']; ?></td>
			<td><?php echo $authorityLang['created']; ?></td>
			<td><?php echo $authorityLang['created_user']; ?></td>
			<td><?php echo $authorityLang['created_user_name']; ?></td>
			<td><?php echo $authorityLang['modified']; ?></td>
			<td><?php echo $authorityLang['modified_user']; ?></td>
			<td><?php echo $authorityLang['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'authority_langs', 'action' => 'view', $authorityLang['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'authority_langs', 'action' => 'edit', $authorityLang['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'authority_langs', 'action' => 'delete', $authorityLang['id']), null, __('Are you sure you want to delete # %s?', $authorityLang['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Authority Lang'), array('controller' => 'authority_langs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Module Links'); ?></h3>
	<?php if (!empty($authority['ModuleLink'])): ?>
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
	<?php foreach ($authority['ModuleLink'] as $moduleLink): ?>
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
	<?php if (!empty($authority['ModuleSystemLink'])): ?>
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
	<?php foreach ($authority['ModuleSystemLink'] as $moduleSystemLink): ?>
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
	<h3><?php echo __('Related Page User Links'); ?></h3>
	<?php if (!empty($authority['PageUserLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Authority Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authority['PageUserLink'] as $pageUserLink): ?>
		<tr>
			<td><?php echo $pageUserLink['id']; ?></td>
			<td><?php echo $pageUserLink['room_num']; ?></td>
			<td><?php echo $pageUserLink['user_id']; ?></td>
			<td><?php echo $pageUserLink['authority_id']; ?></td>
			<td><?php echo $pageUserLink['created']; ?></td>
			<td><?php echo $pageUserLink['created_user']; ?></td>
			<td><?php echo $pageUserLink['created_user_name']; ?></td>
			<td><?php echo $pageUserLink['modified']; ?></td>
			<td><?php echo $pageUserLink['modified_user']; ?></td>
			<td><?php echo $pageUserLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_user_links', 'action' => 'view', $pageUserLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_user_links', 'action' => 'edit', $pageUserLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_user_links', 'action' => 'delete', $pageUserLink['id']), null, __('Are you sure you want to delete # %s?', $pageUserLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($authority['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Handle'); ?></th>
		<th><?php echo __('Authority Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Myportal Page'); ?></th>
		<th><?php echo __('Private Page'); ?></th>
		<th><?php echo __('Avatar'); ?></th>
		<th><?php echo __('Activate Key'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Timezone Offset'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Mobile Email'); ?></th>
		<th><?php echo __('Password Regist'); ?></th>
		<th><?php echo __('Last Login'); ?></th>
		<th><?php echo __('Previous Login'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authority['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['login']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['handle']; ?></td>
			<td><?php echo $user['authority_id']; ?></td>
			<td><?php echo $user['is_active']; ?></td>
			<td><?php echo $user['permalink']; ?></td>
			<td><?php echo $user['myportal_page']; ?></td>
			<td><?php echo $user['private_page']; ?></td>
			<td><?php echo $user['avatar']; ?></td>
			<td><?php echo $user['activate_key']; ?></td>
			<td><?php echo $user['lang']; ?></td>
			<td><?php echo $user['timezone_offset']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['mobile_email']; ?></td>
			<td><?php echo $user['password_regist']; ?></td>
			<td><?php echo $user['last_login']; ?></td>
			<td><?php echo $user['previous_login']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['created_user']; ?></td>
			<td><?php echo $user['created_user_name']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['modified_user']; ?></td>
			<td><?php echo $user['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
