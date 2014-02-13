<div class="pageTrees form">
<?php echo $this->Form->create('PageTree'); ?>
	<fieldset>
		<legend><?php echo __('Add Page Tree'); ?></legend>
	<?php
		echo $this->Form->input('parent_id');
		echo $this->Form->input('child');
		echo $this->Form->input('stratum_num');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Page Trees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Page Trees'), array('controller' => 'page_trees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Page Tree'), array('controller' => 'page_trees', 'action' => 'add')); ?> </li>
	</ul>
</div>
