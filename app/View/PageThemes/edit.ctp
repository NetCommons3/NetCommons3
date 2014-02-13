<div class="pageThemes form">
<?php echo $this->Form->create('PageTheme'); ?>
	<fieldset>
		<legend><?php echo __('Edit Page Theme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('scope');
		echo $this->Form->input('type');
		echo $this->Form->input('lang');
		echo $this->Form->input('space_type');
		echo $this->Form->input('page_id');
		echo $this->Form->input('theme_name');
		echo $this->Form->input('temp_name');
		echo $this->Form->input('center_theme');
		echo $this->Form->input('header_theme');
		echo $this->Form->input('left_theme');
		echo $this->Form->input('right_theme');
		echo $this->Form->input('footer_theme');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PageTheme.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PageTheme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Page Themes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
