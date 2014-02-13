<div class="communities index">
	<h2><?php echo __('Communities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('is_upload'); ?></th>
			<th><?php echo $this->Paginator->sort('publication_range_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('participate_force_all_users'); ?></th>
			<th><?php echo $this->Paginator->sort('participate_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('invite_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('is_participate_notice'); ?></th>
			<th><?php echo $this->Paginator->sort('participate_notice_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('is_resign_notice'); ?></th>
			<th><?php echo $this->Paginator->sort('resign_notice_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communities as $community): ?>
	<tr>
		<td><?php echo h($community['Community']['id']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['room_num']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['photo']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['is_upload']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['publication_range_flag']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['participate_force_all_users']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['participate_flag']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['invite_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['is_participate_notice']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['participate_notice_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['is_resign_notice']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['resign_notice_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['created']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['modified']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($community['Community']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $community['Community']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $community['Community']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $community['Community']['id']), null, __('Are you sure you want to delete # %s?', $community['Community']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Community'), array('action' => 'add')); ?></li>
	</ul>
</div>
