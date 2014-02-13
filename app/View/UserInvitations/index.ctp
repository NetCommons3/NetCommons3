<div class="userInvitations index">
	<h2><?php echo __('User Invitations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
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
	<?php foreach ($userInvitations as $userInvitation): ?>
	<tr>
		<td><?php echo h($userInvitation['UserInvitation']['id']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['user_name']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['email']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['activate_key']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['is_pending_approval_mail']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['expires']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['created']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userInvitation['UserInvitation']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userInvitation['UserInvitation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userInvitation['UserInvitation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userInvitation['UserInvitation']['id']), null, __('Are you sure you want to delete # %s?', $userInvitation['UserInvitation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Invitation'), array('action' => 'add')); ?></li>
	</ul>
</div>
