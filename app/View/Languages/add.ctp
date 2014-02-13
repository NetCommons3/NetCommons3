<div class="languages form">
<?php echo $this->Form->create('Language'); ?>
	<fieldset>
		<legend><?php echo __('Add Language'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?></li>
	</ul>
</div>
