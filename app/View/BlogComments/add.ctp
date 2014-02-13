<div class="blogComments form">
<?php echo $this->Form->create('BlogComment'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog Comment'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('blog_post_id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('title');
		echo $this->Form->input('comment');
		echo $this->Form->input('author');
		echo $this->Form->input('author_email');
		echo $this->Form->input('author_url');
		echo $this->Form->input('author_ip');
		echo $this->Form->input('is_approved');
		echo $this->Form->input('blog_name');
		echo $this->Form->input('comment_type');
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

		<li><?php echo $this->Html->link(__('List Blog Comments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
