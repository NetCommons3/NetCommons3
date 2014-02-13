<div class="communityLangs index">
	<h2><?php echo __('Community Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('community_name'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('revision_root'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communityLangs as $communityLang): ?>
	<tr>
		<td><?php echo h($communityLang['CommunityLang']['id']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['room_num']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['lang']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['community_name']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['summary']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['revision_root']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['created']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['modified']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($communityLang['CommunityLang']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $communityLang['CommunityLang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $communityLang['CommunityLang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $communityLang['CommunityLang']['id']), null, __('Are you sure you want to delete # %s?', $communityLang['CommunityLang']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Community Lang'), array('action' => 'add')); ?></li>
	</ul>
</div>
