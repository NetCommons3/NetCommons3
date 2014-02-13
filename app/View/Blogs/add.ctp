<div class="blogs form">
<?php echo $this->Form->create('Blog'); ?>
	<fieldset>
		<legend><?php echo __('Add Blog'); ?></legend>
	<?php
		echo $this->Form->input('content_id');
		echo $this->Form->input('post_hierarchy');
		echo $this->Form->input('term_hierarchy');
		echo $this->Form->input('vote_flag');
		echo $this->Form->input('sns_flag');
		echo $this->Form->input('new_period');
		echo $this->Form->input('mail_flag');
		echo $this->Form->input('mail_hierarchy');
		echo $this->Form->input('mail_subject');
		echo $this->Form->input('mail_body');
		echo $this->Form->input('comment_flag');
		echo $this->Form->input('comment_required_name');
		echo $this->Form->input('comment_image_auth');
		echo $this->Form->input('comment_hierarchy');
		echo $this->Form->input('comment_mail_flag');
		echo $this->Form->input('comment_mail_hierarchy');
		echo $this->Form->input('comment_mail_subject');
		echo $this->Form->input('comment_mail_body');
		echo $this->Form->input('trackback_transmit_flag');
		echo $this->Form->input('trackback_receive_flag');
		echo $this->Form->input('transmit_blog_name');
		echo $this->Form->input('approved_flag');
		echo $this->Form->input('approved_pre_change_flag');
		echo $this->Form->input('approved_mail_flag');
		echo $this->Form->input('approved_mail_subject');
		echo $this->Form->input('approved_mail_body');
		echo $this->Form->input('comment_approved_flag');
		echo $this->Form->input('trackback_approved_flag');
		echo $this->Form->input('comment_approved_mail_flag');
		echo $this->Form->input('comment_approved_mail_subject');
		echo $this->Form->input('comment_approved_mail_body');
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

		<li><?php echo $this->Html->link(__('List Blogs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
