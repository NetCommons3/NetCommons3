<div class="blogComments index">
	<h2><?php echo __('Blog Comments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('blog_post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lft'); ?></th>
			<th><?php echo $this->Paginator->sort('rght'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('author_email'); ?></th>
			<th><?php echo $this->Paginator->sort('author_url'); ?></th>
			<th><?php echo $this->Paginator->sort('author_ip'); ?></th>
			<th><?php echo $this->Paginator->sort('is_approved'); ?></th>
			<th><?php echo $this->Paginator->sort('blog_name'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogComments as $blogComment): ?>
	<tr>
		<td><?php echo h($blogComment['BlogComment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blogComment['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogComment['Content']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($blogComment['BlogPost']['title'], array('controller' => 'blog_posts', 'action' => 'view', $blogComment['BlogPost']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($blogComment['ParentBlogComment']['title'], array('controller' => 'blog_comments', 'action' => 'view', $blogComment['ParentBlogComment']['id'])); ?>
		</td>
		<td><?php echo h($blogComment['BlogComment']['lft']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['rght']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['title']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['comment']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['author']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['author_email']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['author_url']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['author_ip']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['is_approved']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['blog_name']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['comment_type']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blogComment['BlogComment']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogComment['BlogComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogComment['BlogComment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogComment['BlogComment']['id']), null, __('Are you sure you want to delete # %s?', $blogComment['BlogComment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
