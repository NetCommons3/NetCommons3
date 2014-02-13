<div class="userItems view">
<h2><?php echo __('User Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Name'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['default_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Description'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['default_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Options'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['default_options']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag Name'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['tag_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is System'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['is_system']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Self Edit'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['allow_self_edit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Duplicate'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['allow_duplicate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minlength'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['minlength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maxlength'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['maxlength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regexp'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['regexp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['display_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Public Flag'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['allow_public_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Email Reception Flag'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['allow_email_reception_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('List Num'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['list_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col Num'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['col_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Num'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['row_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attribute'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['attribute']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Selected'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['default_selected']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Title'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['display_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Lang'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['is_lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autoregist Use'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['autoregist_use']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autoregist Sendmail'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['autoregist_sendmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($userItem['UserItem']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Item'), array('action' => 'edit', $userItem['UserItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Item'), array('action' => 'delete', $userItem['UserItem']['id']), null, __('Are you sure you want to delete # %s?', $userItem['UserItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Authority Links'), array('controller' => 'user_item_authority_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('controller' => 'user_item_authority_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Langs'), array('controller' => 'user_item_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Lang'), array('controller' => 'user_item_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('controller' => 'user_item_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Item Authority Links'); ?></h3>
	<?php if (!empty($userItem['UserItemAuthorityLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Item Id'); ?></th>
		<th><?php echo __('User Authority'); ?></th>
		<th><?php echo __('Edit Lower Hierarchy'); ?></th>
		<th><?php echo __('Show Lower Hierarchy'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItem['UserItemAuthorityLink'] as $userItemAuthorityLink): ?>
		<tr>
			<td><?php echo $userItemAuthorityLink['id']; ?></td>
			<td><?php echo $userItemAuthorityLink['user_item_id']; ?></td>
			<td><?php echo $userItemAuthorityLink['user_authority']; ?></td>
			<td><?php echo $userItemAuthorityLink['edit_lower_hierarchy']; ?></td>
			<td><?php echo $userItemAuthorityLink['show_lower_hierarchy']; ?></td>
			<td><?php echo $userItemAuthorityLink['created']; ?></td>
			<td><?php echo $userItemAuthorityLink['created_user']; ?></td>
			<td><?php echo $userItemAuthorityLink['created_user_name']; ?></td>
			<td><?php echo $userItemAuthorityLink['modified']; ?></td>
			<td><?php echo $userItemAuthorityLink['modified_user']; ?></td>
			<td><?php echo $userItemAuthorityLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_item_authority_links', 'action' => 'view', $userItemAuthorityLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_item_authority_links', 'action' => 'edit', $userItemAuthorityLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_item_authority_links', 'action' => 'delete', $userItemAuthorityLink['id']), null, __('Are you sure you want to delete # %s?', $userItemAuthorityLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('controller' => 'user_item_authority_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Item Langs'); ?></h3>
	<?php if (!empty($userItem['UserItemLang'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Item Id'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Options'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItem['UserItemLang'] as $userItemLang): ?>
		<tr>
			<td><?php echo $userItemLang['id']; ?></td>
			<td><?php echo $userItemLang['user_item_id']; ?></td>
			<td><?php echo $userItemLang['lang']; ?></td>
			<td><?php echo $userItemLang['name']; ?></td>
			<td><?php echo $userItemLang['description']; ?></td>
			<td><?php echo $userItemLang['options']; ?></td>
			<td><?php echo $userItemLang['created']; ?></td>
			<td><?php echo $userItemLang['created_user']; ?></td>
			<td><?php echo $userItemLang['created_user_name']; ?></td>
			<td><?php echo $userItemLang['modified']; ?></td>
			<td><?php echo $userItemLang['modified_user']; ?></td>
			<td><?php echo $userItemLang['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_item_langs', 'action' => 'view', $userItemLang['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_item_langs', 'action' => 'edit', $userItemLang['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_item_langs', 'action' => 'delete', $userItemLang['id']), null, __('Are you sure you want to delete # %s?', $userItemLang['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Item Lang'), array('controller' => 'user_item_langs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Item Links'); ?></h3>
	<?php if (!empty($userItem['UserItemLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('User Item Id'); ?></th>
		<th><?php echo __('Public Flag'); ?></th>
		<th><?php echo __('Email Reception Flag'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItem['UserItemLink'] as $userItemLink): ?>
		<tr>
			<td><?php echo $userItemLink['id']; ?></td>
			<td><?php echo $userItemLink['user_id']; ?></td>
			<td><?php echo $userItemLink['lang']; ?></td>
			<td><?php echo $userItemLink['user_item_id']; ?></td>
			<td><?php echo $userItemLink['public_flag']; ?></td>
			<td><?php echo $userItemLink['email_reception_flag']; ?></td>
			<td><?php echo $userItemLink['content']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_item_links', 'action' => 'view', $userItemLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_item_links', 'action' => 'edit', $userItemLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_item_links', 'action' => 'delete', $userItemLink['id']), null, __('Are you sure you want to delete # %s?', $userItemLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
