<div class="communityTags form">
<?php echo $this->Form->create('CommunityTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Community Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('room_num');
		echo $this->Form->input('community_sum_tag_id');
		echo $this->Form->input('tag_value');
		echo $this->Form->input('lang');
		echo $this->Form->input('display_sequence');
		echo $this->Form->input('created_user');
		echo $this->Form->input('created_user_name');
		echo $this->Form->input('modified_user');
		echo $this->Form->input('modified_user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommunityTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CommunityTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Community Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Community Sum Tags'), array('controller' => 'community_sum_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Sum Tag'), array('controller' => 'community_sum_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
