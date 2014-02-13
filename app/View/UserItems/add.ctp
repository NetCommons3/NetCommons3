<div class="userItems form">
<?php echo $this->Form->create('UserItem'); ?>
	<fieldset>
		<legend><?php echo __('Add User Item'); ?></legend>
	<?php
		echo $this->Form->input('default_name');
		echo $this->Form->input('default_description');
		echo $this->Form->input('default_options');
		echo $this->Form->input('type');
		echo $this->Form->input('tag_name');
		echo $this->Form->input('is_system');
		echo $this->Form->input('allow_self_edit');
		echo $this->Form->input('required');
		echo $this->Form->input('allow_duplicate');
		echo $this->Form->input('minlength');
		echo $this->Form->input('maxlength');
		echo $this->Form->input('regexp');
		echo $this->Form->input('display_flag');
		echo $this->Form->input('allow_public_flag');
		echo $this->Form->input('allow_email_reception_flag');
		echo $this->Form->input('list_num');
		echo $this->Form->input('col_num');
		echo $this->Form->input('row_num');
		echo $this->Form->input('attribute');
		echo $this->Form->input('default_selected');
		echo $this->Form->input('display_title');
		echo $this->Form->input('is_lang');
		echo $this->Form->input('autoregist_use');
		echo $this->Form->input('autoregist_sendmail');
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

		<li><?php echo $this->Html->link(__('List User Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Item Authority Links'), array('controller' => 'user_item_authority_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('controller' => 'user_item_authority_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Langs'), array('controller' => 'user_item_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Lang'), array('controller' => 'user_item_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('controller' => 'user_item_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
