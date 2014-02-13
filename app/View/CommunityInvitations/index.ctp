<div class="communityInvitations index">
	<h2><?php echo __('Community Invitations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('activate_key'); ?></th>
			<th><?php echo $this->Paginator->sort('is_pending_approval_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('expires'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communityInvitations as $communityInvitation): ?>
	<tr>
		<td><?php echo h($communityInvitation['CommunityInvitation']['id']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['room_num']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($communityInvitation['User']['id'], array('controller' => 'users', 'action' => 'view', $communityInvitation['User']['id'])); ?>
		</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['activate_key']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['is_pending_approval_mail']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['expires']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['created']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($communityInvitation['CommunityInvitation']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $communityInvitation['CommunityInvitation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $communityInvitation['CommunityInvitation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $communityInvitation['CommunityInvitation']['id']), null, __('Are you sure you want to delete # %s?', $communityInvitation['CommunityInvitation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Community Invitation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
