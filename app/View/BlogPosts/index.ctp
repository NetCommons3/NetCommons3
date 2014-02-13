<div class="blogPosts index">
	<h2><?php echo __('Blog Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_date'); ?></th>
			<th><?php echo $this->Paginator->sort('is_future'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('permalink'); ?></th>
			<th><?php echo $this->Paginator->sort('icon_name'); ?></th>
			<th><?php echo $this->Paginator->sort('revision_root'); ?></th>
			<th><?php echo $this->Paginator->sort('vote'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('is_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('pre_change_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('pre_change_date'); ?></th>
			<th><?php echo $this->Paginator->sort('post_password'); ?></th>
			<th><?php echo $this->Paginator->sort('to_ping'); ?></th>
			<th><?php echo $this->Paginator->sort('pinged'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_comment_count'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_count'); ?></th>
			<th><?php echo $this->Paginator->sort('approved_trackback_count'); ?></th>
			<th><?php echo $this->Paginator->sort('trackback_count'); ?></th>
			<th><?php echo $this->Paginator->sort('vote_count'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogPosts as $blogPost): ?>
	<tr>
		<td><?php echo h($blogPost['BlogPost']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blogPost['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogPost['Content']['id'])); ?>
		</td>
		<td><?php echo h($blogPost['BlogPost']['post_date']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['is_future']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['title']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['permalink']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['icon_name']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['revision_root']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['vote']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['status']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['is_approved']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['pre_change_flag']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['pre_change_date']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['post_password']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['to_ping']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['pinged']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['approved_comment_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['comment_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['approved_trackback_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['trackback_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['vote_count']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blogPost['BlogPost']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogPost['BlogPost']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogPost['BlogPost']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogPost['BlogPost']['id']), null, __('Are you sure you want to delete # %s?', $blogPost['BlogPost']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
