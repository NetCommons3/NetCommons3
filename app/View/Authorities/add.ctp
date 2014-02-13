<div class="authorities form">
<?php echo $this->Form->create('Authority'); ?>
	<fieldset>
		<legend><?php echo __('Add Authority'); ?></legend>
	<?php
		echo $this->Form->input('default_name');
		echo $this->Form->input('system_flag');
		echo $this->Form->input('hierarchy');
		echo $this->Form->input('allow_creating_community');
		echo $this->Form->input('allow_new_participant');
		echo $this->Form->input('myportal_use_flag');
		echo $this->Form->input('allow_myportal_viewing_hierarchy');
		echo $this->Form->input('private_use_flag');
		echo $this->Form->input('public_createroom_flag');
		echo $this->Form->input('group_createroom_flag');
		echo $this->Form->input('myportal_createroom_flag');
		echo $this->Form->input('private_createroom_flag');
		echo $this->Form->input('allow_htmltag_flag');
		echo $this->Form->input('allow_meta_flag');
		echo $this->Form->input('allow_theme_flag');
		echo $this->Form->input('allow_style_flag');
		echo $this->Form->input('allow_layout_flag');
		echo $this->Form->input('allow_column_flag');
		echo $this->Form->input('allow_attachment');
		echo $this->Form->input('allow_video');
		echo $this->Form->input('max_size');
		echo $this->Form->input('change_leftcolumn_flag');
		echo $this->Form->input('change_rightcolumn_flag');
		echo $this->Form->input('change_headercolumn_flag');
		echo $this->Form->input('change_footercolumn_flag');
		echo $this->Form->input('display_participants_editing');
		echo $this->Form->input('allow_move_operation');
		echo $this->Form->input('allow_copy_operation');
		echo $this->Form->input('allow_shortcut_operation');
		echo $this->Form->input('allow_operation_of_shortcut');
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

		<li><?php echo $this->Html->link(__('List Authorities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authority Langs'), array('controller' => 'authority_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority Lang'), array('controller' => 'authority_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('controller' => 'page_user_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
