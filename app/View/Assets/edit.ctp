<div class="assets form">
<?php echo $this->Form->create('Asset'); ?>
	<fieldset>
		<legend><?php echo __('Edit Asset'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Asset.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Asset.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Assets'), array('action' => 'index')); ?></li>
	</ul>
</div>
