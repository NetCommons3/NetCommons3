<div class="blogTermLinks form">
<?php echo $this->Form->create('BlogTermLink'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog Term Link'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('blog_post_id');
		echo $this->Form->input('blog_term_id');
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

		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Terms'), array('controller' => 'blog_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term'), array('controller' => 'blog_terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
