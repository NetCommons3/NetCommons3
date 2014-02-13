<div class="communitySumTags index">
	<h2><?php echo __('Community Sum Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_value'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('used_number'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communitySumTags as $communitySumTag): ?>
	<tr>
		<td><?php echo h($communitySumTag['CommunitySumTag']['id']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['tag_value']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['lang']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['used_number']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['created']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['modified']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($communitySumTag['CommunitySumTag']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $communitySumTag['CommunitySumTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $communitySumTag['CommunitySumTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $communitySumTag['CommunitySumTag']['id']), null, __('Are you sure you want to delete # %s?', $communitySumTag['CommunitySumTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Community Sum Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Community Tags'), array('controller' => 'community_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Tag'), array('controller' => 'community_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
