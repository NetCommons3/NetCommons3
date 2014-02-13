<div class="nc3Assets form">
<?php echo $this->Form->create('Nc3Asset'); ?>
	<fieldset>
		<legend><?php echo __('Add Nc3 Asset'); ?></legend>
	<?php
		echo $this->Form->input('url');
		echo $this->Form->input('hash_content');
		echo $this->Form->input('plugin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Nc3 Assets'), array('action' => 'index')); ?></li>
	</ul>
</div>
