<div class="announcementEdits index">
	<h2><?php echo __('Announcement Edits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_pre_change_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($announcementEdits as $announcementEdit): ?>
	<tr>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($announcementEdit['Content']['title'], array('controller' => 'contents', 'action' => 'view', $announcementEdit['Content']['id'])); ?>
		</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['post_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['approved_flag']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['approved_pre_change_flag']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_flag']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_subject']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_body']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['created']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['modified']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($announcementEdit['AnnouncementEdit']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $announcementEdit['AnnouncementEdit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $announcementEdit['AnnouncementEdit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $announcementEdit['AnnouncementEdit']['id']), null, __('Are you sure you want to delete # %s?', $announcementEdit['AnnouncementEdit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Announcement Edit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
