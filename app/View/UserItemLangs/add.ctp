<div class="userItemLangs form">
<?php echo $this->Form->create('UserItemLang'); ?>
	<fieldset>
		<legend><?php echo __('Add User Item Lang'); ?></legend>
	<?php
		echo $this->Form->input('user_item_id');
		echo $this->Form->input('lang');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('options');
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

		<li><?php echo $this->Html->link(__('List User Item Langs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Items'), array('controller' => 'user_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item'), array('controller' => 'user_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
