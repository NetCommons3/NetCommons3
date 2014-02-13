<div class="blocks form">
<?php echo $this->Form->create('Block'); ?>
	<fieldset>
		<legend><?php echo __('Add Block'); ?></legend>
	<?php
		echo $this->Form->input('page_id');
		echo $this->Form->input('content_id');
		echo $this->Form->input('module_id');
		echo $this->Form->input('title');
		echo $this->Form->input('show_title');
		echo $this->Form->input('controller_action');
		echo $this->Form->input('root');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('thread_num');
		echo $this->Form->input('col_num');
		echo $this->Form->input('row_num');
		echo $this->Form->input('display_flag');
		echo $this->Form->input('display_from_date');
		echo $this->Form->input('display_to_date');
		echo $this->Form->input('theme_name');
		echo $this->Form->input('temp_name');
		echo $this->Form->input('left_margin');
		echo $this->Form->input('right_margin');
		echo $this->Form->input('top_margin');
		echo $this->Form->input('bottom_margin');
		echo $this->Form->input('min_width_size');
		echo $this->Form->input('min_height_size');
		echo $this->Form->input('lock_authority_num');
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

		<li><?php echo $this->Html->link(__('List Blocks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Styles'), array('controller' => 'blog_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Style'), array('controller' => 'blog_styles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Rooms'), array('controller' => 'whatsnew_select_rooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select Room'), array('controller' => 'whatsnew_select_rooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Users'), array('controller' => 'whatsnew_select_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select User'), array('controller' => 'whatsnew_select_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Styles'), array('controller' => 'whatsnew_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Style'), array('controller' => 'whatsnew_styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
