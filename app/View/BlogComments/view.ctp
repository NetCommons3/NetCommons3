<div class="blogComments view">
<h2><?php echo __('Blog Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogComment['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogComment['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blog Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogComment['BlogPost']['title'], array('controller' => 'blog_posts', 'action' => 'view', $blogComment['BlogPost']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Blog Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogComment['ParentBlogComment']['title'], array('controller' => 'blog_comments', 'action' => 'view', $blogComment['ParentBlogComment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Email'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['author_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Url'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['author_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author Ip'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['author_ip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blog Name'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['blog_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Type'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['comment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blogComment['BlogComment']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog Comment'), array('action' => 'edit', $blogComment['BlogComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog Comment'), array('action' => 'delete', $blogComment['BlogComment']['id']), null, __('Are you sure you want to delete # %s?', $blogComment['BlogComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Comments'); ?></h3>
	<?php if (!empty($blogComment['ChildBlogComment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Blog Post Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Author Email'); ?></th>
		<th><?php echo __('Author Url'); ?></th>
		<th><?php echo __('Author Ip'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('Blog Name'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogComment['ChildBlogComment'] as $childBlogComment): ?>
		<tr>
			<td><?php echo $childBlogComment['id']; ?></td>
			<td><?php echo $childBlogComment['content_id']; ?></td>
			<td><?php echo $childBlogComment['blog_post_id']; ?></td>
			<td><?php echo $childBlogComment['parent_id']; ?></td>
			<td><?php echo $childBlogComment['lft']; ?></td>
			<td><?php echo $childBlogComment['rght']; ?></td>
			<td><?php echo $childBlogComment['title']; ?></td>
			<td><?php echo $childBlogComment['comment']; ?></td>
			<td><?php echo $childBlogComment['author']; ?></td>
			<td><?php echo $childBlogComment['author_email']; ?></td>
			<td><?php echo $childBlogComment['author_url']; ?></td>
			<td><?php echo $childBlogComment['author_ip']; ?></td>
			<td><?php echo $childBlogComment['is_approved']; ?></td>
			<td><?php echo $childBlogComment['blog_name']; ?></td>
			<td><?php echo $childBlogComment['comment_type']; ?></td>
			<td><?php echo $childBlogComment['created']; ?></td>
			<td><?php echo $childBlogComment['created_user']; ?></td>
			<td><?php echo $childBlogComment['created_user_name']; ?></td>
			<td><?php echo $childBlogComment['modified']; ?></td>
			<td><?php echo $childBlogComment['modified_user']; ?></td>
			<td><?php echo $childBlogComment['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_comments', 'action' => 'view', $childBlogComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_comments', 'action' => 'edit', $childBlogComment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_comments', 'action' => 'delete', $childBlogComment['id']), null, __('Are you sure you want to delete # %s?', $childBlogComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
