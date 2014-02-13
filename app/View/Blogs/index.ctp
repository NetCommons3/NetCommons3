<div class="blogs index">
	<h2><?php echo __('Blogs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('term_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('vote_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('sns_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('new_period'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_body'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_required_name'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_image_auth'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_mail_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_mail_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_mail_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_mail_body'); ?></th>
			<th><?php echo $this->Paginator->sort('trackback_transmit_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('trackback_receive_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('transmit_blog_name'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_pre_change_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_mail_body'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('trackback_approved_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved_mail_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved_mail_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_approved_mail_body'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogs as $blog): ?>
	<tr>
		<td><?php echo h($blog['Blog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blog['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blog['Content']['id'])); ?>
		</td>
		<td><?php echo h($blog['Blog']['post_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['term_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['vote_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['sns_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['new_period']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['mail_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['mail_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['mail_subject']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['mail_body']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_required_name']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_image_auth']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_mail_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_mail_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_mail_subject']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_mail_body']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['trackback_transmit_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['trackback_receive_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['transmit_blog_name']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['approved_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['approved_pre_change_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['approved_mail_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['approved_mail_subject']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['approved_mail_body']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_approved_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['trackback_approved_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_approved_mail_flag']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_approved_mail_subject']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['comment_approved_mail_body']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['created']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blog['Blog']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blog['Blog']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blog['Blog']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blog['Blog']['id']), null, __('Are you sure you want to delete # %s?', $blog['Blog']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Blog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
