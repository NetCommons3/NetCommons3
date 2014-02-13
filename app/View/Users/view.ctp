<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Handle'); ?></dt>
		<dd>
			<?php echo h($user['User']['handle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $user['Authority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permalink'); ?></dt>
		<dd>
			<?php echo h($user['User']['permalink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myportal Page'); ?></dt>
		<dd>
			<?php echo h($user['User']['myportal_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Private Page'); ?></dt>
		<dd>
			<?php echo h($user['User']['private_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar'); ?></dt>
		<dd>
			<?php echo h($user['User']['avatar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activate Key'); ?></dt>
		<dd>
			<?php echo h($user['User']['activate_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($user['User']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timezone Offset'); ?></dt>
		<dd>
			<?php echo h($user['User']['timezone_offset']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password Regist'); ?></dt>
		<dd>
			<?php echo h($user['User']['password_regist']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Previous Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['previous_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($user['User']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Invitations'), array('controller' => 'community_invitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Invitation'), array('controller' => 'community_invitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Sum Views'), array('controller' => 'page_sum_views', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('controller' => 'page_sum_views', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('controller' => 'page_user_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passports'), array('controller' => 'passports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passport'), array('controller' => 'passports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Links'), array('controller' => 'user_group_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('controller' => 'user_item_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Community Invitations'); ?></h3>
	<?php if (!empty($user['CommunityInvitation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Activate Key'); ?></th>
		<th><?php echo __('Is Pending Approval Mail'); ?></th>
		<th><?php echo __('Expires'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['CommunityInvitation'] as $communityInvitation): ?>
		<tr>
			<td><?php echo $communityInvitation['id']; ?></td>
			<td><?php echo $communityInvitation['room_num']; ?></td>
			<td><?php echo $communityInvitation['user_id']; ?></td>
			<td><?php echo $communityInvitation['activate_key']; ?></td>
			<td><?php echo $communityInvitation['is_pending_approval_mail']; ?></td>
			<td><?php echo $communityInvitation['expires']; ?></td>
			<td><?php echo $communityInvitation['created']; ?></td>
			<td><?php echo $communityInvitation['created_user']; ?></td>
			<td><?php echo $communityInvitation['created_user_name']; ?></td>
			<td><?php echo $communityInvitation['modified']; ?></td>
			<td><?php echo $communityInvitation['modified_user']; ?></td>
			<td><?php echo $communityInvitation['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'community_invitations', 'action' => 'view', $communityInvitation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'community_invitations', 'action' => 'edit', $communityInvitation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'community_invitations', 'action' => 'delete', $communityInvitation['id']), null, __('Are you sure you want to delete # %s?', $communityInvitation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Community Invitation'), array('controller' => 'community_invitations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Page Sum Views'); ?></h3>
	<?php if (!empty($user['PageSumView'])): ?>
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
	<?php foreach ($user['PageSumView'] as $pageSumView): ?>
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
	<h3><?php echo __('Related Page User Links'); ?></h3>
	<?php if (!empty($user['PageUserLink'])): ?>
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
	<?php foreach ($user['PageUserLink'] as $pageUserLink): ?>
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
	<h3><?php echo __('Related Passports'); ?></h3>
	<?php if (!empty($user['Passport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Passport'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Passport'] as $passport): ?>
		<tr>
			<td><?php echo $passport['id']; ?></td>
			<td><?php echo $passport['user_id']; ?></td>
			<td><?php echo $passport['passport']; ?></td>
			<td><?php echo $passport['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'passports', 'action' => 'view', $passport['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'passports', 'action' => 'edit', $passport['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'passports', 'action' => 'delete', $passport['id']), null, __('Are you sure you want to delete # %s?', $passport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Passport'), array('controller' => 'passports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Uploads'); ?></h3>
	<?php if (!empty($user['Upload'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('Alt'); ?></th>
		<th><?php echo __('Caption'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('File Size'); ?></th>
		<th><?php echo __('File Path'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Extension'); ?></th>
		<th><?php echo __('Plugin'); ?></th>
		<th><?php echo __('Upload Model Name'); ?></th>
		<th><?php echo __('Is Delete From Library'); ?></th>
		<th><?php echo __('Is Use'); ?></th>
		<th><?php echo __('Is Wysiwyg'); ?></th>
		<th><?php echo __('Download Count'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Month'); ?></th>
		<th><?php echo __('Day'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Upload'] as $upload): ?>
		<tr>
			<td><?php echo $upload['id']; ?></td>
			<td><?php echo $upload['user_id']; ?></td>
			<td><?php echo $upload['file_name']; ?></td>
			<td><?php echo $upload['alt']; ?></td>
			<td><?php echo $upload['caption']; ?></td>
			<td><?php echo $upload['description']; ?></td>
			<td><?php echo $upload['file_size']; ?></td>
			<td><?php echo $upload['file_path']; ?></td>
			<td><?php echo $upload['mimetype']; ?></td>
			<td><?php echo $upload['extension']; ?></td>
			<td><?php echo $upload['plugin']; ?></td>
			<td><?php echo $upload['upload_model_name']; ?></td>
			<td><?php echo $upload['is_delete_from_library']; ?></td>
			<td><?php echo $upload['is_use']; ?></td>
			<td><?php echo $upload['is_wysiwyg']; ?></td>
			<td><?php echo $upload['download_count']; ?></td>
			<td><?php echo $upload['year']; ?></td>
			<td><?php echo $upload['month']; ?></td>
			<td><?php echo $upload['day']; ?></td>
			<td><?php echo $upload['created']; ?></td>
			<td><?php echo $upload['created_user']; ?></td>
			<td><?php echo $upload['created_user_name']; ?></td>
			<td><?php echo $upload['modified']; ?></td>
			<td><?php echo $upload['modified_user']; ?></td>
			<td><?php echo $upload['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'uploads', 'action' => 'view', $upload['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'uploads', 'action' => 'edit', $upload['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'uploads', 'action' => 'delete', $upload['id']), null, __('Are you sure you want to delete # %s?', $upload['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Group Links'); ?></h3>
	<?php if (!empty($user['UserGroupLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserGroupLink'] as $userGroupLink): ?>
		<tr>
			<td><?php echo $userGroupLink['id']; ?></td>
			<td><?php echo $userGroupLink['user_group_id']; ?></td>
			<td><?php echo $userGroupLink['user_id']; ?></td>
			<td><?php echo $userGroupLink['created']; ?></td>
			<td><?php echo $userGroupLink['created_user']; ?></td>
			<td><?php echo $userGroupLink['created_user_name']; ?></td>
			<td><?php echo $userGroupLink['modified']; ?></td>
			<td><?php echo $userGroupLink['modified_user']; ?></td>
			<td><?php echo $userGroupLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_group_links', 'action' => 'view', $userGroupLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_group_links', 'action' => 'edit', $userGroupLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_group_links', 'action' => 'delete', $userGroupLink['id']), null, __('Are you sure you want to delete # %s?', $userGroupLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Item Links'); ?></h3>
	<?php if (!empty($user['UserItemLink'])): ?>
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
	<?php foreach ($user['UserItemLink'] as $userItemLink): ?>
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
