<div class="communitySumTags view">
<h2><?php echo __('Community Sum Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag Value'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['tag_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used Number'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['used_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($communitySumTag['CommunitySumTag']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Community Sum Tag'), array('action' => 'edit', $communitySumTag['CommunitySumTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Community Sum Tag'), array('action' => 'delete', $communitySumTag['CommunitySumTag']['id']), null, __('Are you sure you want to delete # %s?', $communitySumTag['CommunitySumTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Sum Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Sum Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Tags'), array('controller' => 'community_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Tag'), array('controller' => 'community_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Community Tags'); ?></h3>
	<?php if (!empty($communitySumTag['CommunityTag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Room Num'); ?></th>
		<th><?php echo __('Community Sum Tag Id'); ?></th>
		<th><?php echo __('Tag Value'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th><?php echo __('Display Sequence'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($communitySumTag['CommunityTag'] as $communityTag): ?>
		<tr>
			<td><?php echo $communityTag['id']; ?></td>
			<td><?php echo $communityTag['room_num']; ?></td>
			<td><?php echo $communityTag['community_sum_tag_id']; ?></td>
			<td><?php echo $communityTag['tag_value']; ?></td>
			<td><?php echo $communityTag['lang']; ?></td>
			<td><?php echo $communityTag['display_sequence']; ?></td>
			<td><?php echo $communityTag['created']; ?></td>
			<td><?php echo $communityTag['created_user']; ?></td>
			<td><?php echo $communityTag['created_user_name']; ?></td>
			<td><?php echo $communityTag['modified']; ?></td>
			<td><?php echo $communityTag['modified_user']; ?></td>
			<td><?php echo $communityTag['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'community_tags', 'action' => 'view', $communityTag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'community_tags', 'action' => 'edit', $communityTag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'community_tags', 'action' => 'delete', $communityTag['id']), null, __('Are you sure you want to delete # %s?', $communityTag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Community Tag'), array('controller' => 'community_tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
