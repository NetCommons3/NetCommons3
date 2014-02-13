<div class="blogTerms form">
<?php echo $this->Form->create('BlogTerm'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog Term'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('taxonomy');
		echo $this->Form->input('checked');
		echo $this->Form->input('parent');
		echo $this->Form->input('count');
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

		<li><?php echo $this->Html->link(__('List Blog Terms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
