<div class="blogs view">
<h2><?php echo __('Blog'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blog['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blog['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Hierarchy'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['post_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term Hierarchy'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['term_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vote Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['vote_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sns Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['sns_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('New Period'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['new_period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['mail_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Hierarchy'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['mail_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Subject'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['mail_subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Body'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['mail_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Required Name'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_required_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Image Auth'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_image_auth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Hierarchy'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Mail Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_mail_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Mail Hierarchy'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_mail_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Mail Subject'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_mail_subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Mail Body'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_mail_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackback Transmit Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['trackback_transmit_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackback Receive Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['trackback_receive_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transmit Blog Name'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['transmit_blog_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['approved_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Pre Change Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['approved_pre_change_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['approved_mail_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Subject'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['approved_mail_subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Body'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['approved_mail_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_approved_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackback Approved Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['trackback_approved_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved Mail Flag'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_approved_mail_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved Mail Subject'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_approved_mail_subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Approved Mail Body'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['comment_approved_mail_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blog['Blog']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog'), array('action' => 'edit', $blog['Blog']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog'), array('action' => 'delete', $blog['Blog']['id']), null, __('Are you sure you want to delete # %s?', $blog['Blog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blogs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
