<div class="authorityLangs form">
<?php echo $this->Form->create('AuthorityLang'); ?>
	<fieldset>
		<legend><?php echo __('Add Authority Lang'); ?></legend>
	<?php
		echo $this->Form->input('authority_id');
		echo $this->Form->input('lang');
		echo $this->Form->input('name');
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

		<li><?php echo $this->Html->link(__('List Authority Langs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
