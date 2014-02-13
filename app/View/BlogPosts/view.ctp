<div class="blogPosts view">
<h2><?php echo __('Blog Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogPost['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogPost['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Future'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['is_future']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permalink'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['permalink']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icon Name'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['icon_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Root'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['revision_root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vote'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['vote']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre Change Flag'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['pre_change_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre Change Date'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['pre_change_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Password'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['post_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Ping'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['to_ping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pinged'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['pinged']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Comment Count'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['approved_comment_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment Count'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['comment_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Trackback Count'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['approved_trackback_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trackback Count'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['trackback_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vote Count'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['vote_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blogPost['BlogPost']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog Post'), array('action' => 'edit', $blogPost['BlogPost']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog Post'), array('action' => 'delete', $blogPost['BlogPost']['id']), null, __('Are you sure you want to delete # %s?', $blogPost['BlogPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Comments'); ?></h3>
	<?php if (!empty($blogPost['BlogComment'])): ?>
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
	<?php foreach ($blogPost['BlogComment'] as $blogComment): ?>
		<tr>
			<td><?php echo $blogComment['id']; ?></td>
			<td><?php echo $blogComment['content_id']; ?></td>
			<td><?php echo $blogComment['blog_post_id']; ?></td>
			<td><?php echo $blogComment['parent_id']; ?></td>
			<td><?php echo $blogComment['lft']; ?></td>
			<td><?php echo $blogComment['rght']; ?></td>
			<td><?php echo $blogComment['title']; ?></td>
			<td><?php echo $blogComment['comment']; ?></td>
			<td><?php echo $blogComment['author']; ?></td>
			<td><?php echo $blogComment['author_email']; ?></td>
			<td><?php echo $blogComment['author_url']; ?></td>
			<td><?php echo $blogComment['author_ip']; ?></td>
			<td><?php echo $blogComment['is_approved']; ?></td>
			<td><?php echo $blogComment['blog_name']; ?></td>
			<td><?php echo $blogComment['comment_type']; ?></td>
			<td><?php echo $blogComment['created']; ?></td>
			<td><?php echo $blogComment['created_user']; ?></td>
			<td><?php echo $blogComment['created_user_name']; ?></td>
			<td><?php echo $blogComment['modified']; ?></td>
			<td><?php echo $blogComment['modified_user']; ?></td>
			<td><?php echo $blogComment['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_comments', 'action' => 'view', $blogComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_comments', 'action' => 'edit', $blogComment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_comments', 'action' => 'delete', $blogComment['id']), null, __('Are you sure you want to delete # %s?', $blogComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Term Links'); ?></h3>
	<?php if (!empty($blogPost['BlogTermLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Blog Post Id'); ?></th>
		<th><?php echo __('Blog Term Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogPost['BlogTermLink'] as $blogTermLink): ?>
		<tr>
			<td><?php echo $blogTermLink['id']; ?></td>
			<td><?php echo $blogTermLink['content_id']; ?></td>
			<td><?php echo $blogTermLink['blog_post_id']; ?></td>
			<td><?php echo $blogTermLink['blog_term_id']; ?></td>
			<td><?php echo $blogTermLink['created']; ?></td>
			<td><?php echo $blogTermLink['created_user']; ?></td>
			<td><?php echo $blogTermLink['created_user_name']; ?></td>
			<td><?php echo $blogTermLink['modified']; ?></td>
			<td><?php echo $blogTermLink['modified_user']; ?></td>
			<td><?php echo $blogTermLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_term_links', 'action' => 'view', $blogTermLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_term_links', 'action' => 'edit', $blogTermLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_term_links', 'action' => 'delete', $blogTermLink['id']), null, __('Are you sure you want to delete # %s?', $blogTermLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
