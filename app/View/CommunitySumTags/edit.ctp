<div class="communitySumTags form">
<?php echo $this->Form->create('CommunitySumTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Community Sum Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tag_value');
		echo $this->Form->input('lang');
		echo $this->Form->input('used_number');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommunitySumTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CommunitySumTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Community Sum Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Community Tags'), array('controller' => 'community_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Tag'), array('controller' => 'community_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
