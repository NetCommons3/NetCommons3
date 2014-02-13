<div class="communityLangs form">
<?php echo $this->Form->create('CommunityLang'); ?>
	<fieldset>
		<legend><?php echo __('Add Community Lang'); ?></legend>
	<?php
		echo $this->Form->input('room_num');
		echo $this->Form->input('lang');
		echo $this->Form->input('community_name');
		echo $this->Form->input('summary');
		echo $this->Form->input('revision_root');
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

		<li><?php echo $this->Html->link(__('List Community Langs'), array('action' => 'index')); ?></li>
	</ul>
</div>
