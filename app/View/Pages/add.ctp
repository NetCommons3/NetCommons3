<div class="pages form">
<?php echo $this->Form->create('Page'); ?>
	<fieldset>
		<legend><?php echo __('Add Page'); ?></legend>
	<?php
		echo $this->Form->input('root');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('thread_num');
		echo $this->Form->input('display_sequence');
		echo $this->Form->input('page_name');
		echo $this->Form->input('permalink');
		echo $this->Form->input('position_flag');
		echo $this->Form->input('lang');
		echo $this->Form->input('is_page_meta_node');
		echo $this->Form->input('is_page_style_node');
		echo $this->Form->input('is_page_layout_node');
		echo $this->Form->input('is_page_theme_node');
		echo $this->Form->input('is_page_column_node');
		echo $this->Form->input('room_num');
		echo $this->Form->input('space_type');
		echo $this->Form->input('show_count');
		echo $this->Form->input('display_flag');
		echo $this->Form->input('display_from_date');
		echo $this->Form->input('display_to_date');
		echo $this->Form->input('display_apply_subpage');
		echo $this->Form->input('display_reverse_permalink');
		echo $this->Form->input('is_approved');
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

		<li><?php echo $this->Html->link(__('List Pages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Columns'), array('controller' => 'page_columns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Column'), array('controller' => 'page_columns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Layouts'), array('controller' => 'page_layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Layout'), array('controller' => 'page_layouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Metas'), array('controller' => 'page_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Meta'), array('controller' => 'page_metas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Styles'), array('controller' => 'page_styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Style'), array('controller' => 'page_styles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Sum Views'), array('controller' => 'page_sum_views', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('controller' => 'page_sum_views', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Themes'), array('controller' => 'page_themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Theme'), array('controller' => 'page_themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
