<div class="sessions form">
<?php echo $this->Form->create('Session'); ?>
	<fieldset>
		<legend><?php echo __('Add Session'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('expires');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sessions'), array('action' => 'index')); ?></li>
	</ul>
</div>
