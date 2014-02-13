<div class="communities form">
<?php echo $this->Form->create('Community'); ?>
	<fieldset>
		<legend><?php echo __('Edit Community'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('room_num');
		echo $this->Form->input('photo');
		echo $this->Form->input('is_upload');
		echo $this->Form->input('publication_range_flag');
		echo $this->Form->input('participate_force_all_users');
		echo $this->Form->input('participate_flag');
		echo $this->Form->input('invite_hierarchy');
		echo $this->Form->input('is_participate_notice');
		echo $this->Form->input('participate_notice_hierarchy');
		echo $this->Form->input('is_resign_notice');
		echo $this->Form->input('resign_notice_hierarchy');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Community.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Community.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Communities'), array('action' => 'index')); ?></li>
	</ul>
</div>
