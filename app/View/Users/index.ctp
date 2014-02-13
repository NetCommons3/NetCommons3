<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('handle'); ?></th>
			<th><?php echo $this->Paginator->sort('authority_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('permalink'); ?></th>
			<th><?php echo $this->Paginator->sort('myportal_page'); ?></th>
			<th><?php echo $this->Paginator->sort('private_page'); ?></th>
			<th><?php echo $this->Paginator->sort('avatar'); ?></th>
			<th><?php echo $this->Paginator->sort('activate_key'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('timezone_offset'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_email'); ?></th>
			<th><?php echo $this->Paginator->sort('password_regist'); ?></th>
			<th><?php echo $this->Paginator->sort('last_login'); ?></th>
			<th><?php echo $this->Paginator->sort('previous_login'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['handle']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $user['Authority']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['permalink']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['myportal_page']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['private_page']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['avatar']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['activate_key']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lang']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['timezone_offset']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['mobile_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password_regist']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['previous_login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
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
