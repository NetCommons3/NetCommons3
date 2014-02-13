<div class="communityTags view">
<h2><?php echo __('Community Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Community Sum Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($communityTag['CommunitySumTag']['id'], array('controller' => 'community_sum_tags', 'action' => 'view', $communityTag['CommunitySumTag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag Value'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['tag_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Sequence'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['display_sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($communityTag['CommunityTag']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Community Tag'), array('action' => 'edit', $communityTag['CommunityTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Community Tag'), array('action' => 'delete', $communityTag['CommunityTag']['id']), null, __('Are you sure you want to delete # %s?', $communityTag['CommunityTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Sum Tags'), array('controller' => 'community_sum_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Sum Tag'), array('controller' => 'community_sum_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
