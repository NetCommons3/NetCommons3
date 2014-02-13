<div class="blogPosts form">
<?php echo $this->Form->create('BlogPost'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog Post'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('post_date');
		echo $this->Form->input('is_future');
		echo $this->Form->input('title');
		echo $this->Form->input('permalink');
		echo $this->Form->input('icon_name');
		echo $this->Form->input('revision_root');
		echo $this->Form->input('vote');
		echo $this->Form->input('status');
		echo $this->Form->input('is_approved');
		echo $this->Form->input('pre_change_flag');
		echo $this->Form->input('pre_change_date');
		echo $this->Form->input('post_password');
		echo $this->Form->input('to_ping');
		echo $this->Form->input('pinged');
		echo $this->Form->input('approved_comment_count');
		echo $this->Form->input('comment_count');
		echo $this->Form->input('approved_trackback_count');
		echo $this->Form->input('trackback_count');
		echo $this->Form->input('vote_count');
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

		<li><?php echo $this->Html->link(__('List Blog Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
