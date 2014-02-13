<div class="languages form">
<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __('Edit Language'); ?></legend>
	<?php
		echo $this->Form->input('language');
		echo $this->Form->input('display_name');
		echo $this->Form->input('display_sequence');
		echo $this->Form->input('display_flag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Language.language')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Language.language'))); ?></li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?></li>
	</ul>
</div>
