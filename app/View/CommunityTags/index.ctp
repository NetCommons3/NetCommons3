<div class="communityTags index">
	<h2><?php echo __('Community Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('community_sum_tag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_value'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('display_sequence'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communityTags as $communityTag): ?>
	<tr>
		<td><?php echo h($communityTag['CommunityTag']['id']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['room_num']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($communityTag['CommunitySumTag']['id'], array('controller' => 'community_sum_tags', 'action' => 'view', $communityTag['CommunitySumTag']['id'])); ?>
		</td>
		<td><?php echo h($communityTag['CommunityTag']['tag_value']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['lang']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['display_sequence']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['created']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['modified']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($communityTag['CommunityTag']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $communityTag['CommunityTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $communityTag['CommunityTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $communityTag['CommunityTag']['id']), null, __('Are you sure you want to delete # %s?', $communityTag['CommunityTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Community Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Community Sum Tags'), array('controller' => 'community_sum_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Sum Tag'), array('controller' => 'community_sum_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
