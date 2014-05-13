<div class="contents view">
<h2><?php echo __('Content'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($content['Content']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($content['Module']['id'], array('controller' => 'modules', 'action' => 'view', $content['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($content['Content']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shortcut Type'); ?></dt>
		<dd>
			<?php echo h($content['Content']['shortcut_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Root'); ?></dt>
		<dd>
			<?php echo h($content['Content']['root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($content['Content']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($content['Content']['display_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($content['Content']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($content['Content']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($content['Content']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($content['Content']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content'), array('action' => 'edit', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content'), array('action' => 'delete', $content['Content']['id']), null, __('Are you sure you want to delete # %s?', $content['Content']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Comments'), array('controller' => 'blog_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Comment'), array('controller' => 'blog_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Terms'), array('controller' => 'blog_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term'), array('controller' => 'blog_terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blogs'), array('controller' => 'blogs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog'), array('controller' => 'blogs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('controller' => 'upload_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Archives'); ?></h3>
	<?php if (!empty($content['Archive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Model Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Search Content'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Archive'] as $archive): ?>
		<tr>
			<td><?php echo $archive['id']; ?></td>
			<td><?php echo $archive['parent_model_name']; ?></td>
			<td><?php echo $archive['parent_id']; ?></td>
			<td><?php echo $archive['module_id']; ?></td>
			<td><?php echo $archive['content_id']; ?></td>
			<td><?php echo $archive['model_name']; ?></td>
			<td><?php echo $archive['plugin_unique']; ?></td>
			<td><?php echo $archive['status']; ?></td>
			<td><?php echo $archive['is_approved']; ?></td>
			<td><?php echo $archive['user_group_id']; ?></td>
			<td><?php echo $archive['access_hierarchy']; ?></td>
			<td><?php echo $archive['count']; ?></td>
			<td><?php echo $archive['title']; ?></td>
			<td><?php echo $archive['content']; ?></td>
			<td><?php echo $archive['search_content']; ?></td>
			<td><?php echo $archive['url']; ?></td>
			<td><?php echo $archive['created']; ?></td>
			<td><?php echo $archive['created_user']; ?></td>
			<td><?php echo $archive['created_user_name']; ?></td>
			<td><?php echo $archive['modified']; ?></td>
			<td><?php echo $archive['modified_user']; ?></td>
			<td><?php echo $archive['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'archives', 'action' => 'view', $archive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'archives', 'action' => 'edit', $archive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'archives', 'action' => 'delete', $archive['id']), null, __('Are you sure you want to delete # %s?', $archive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blocks'); ?></h3>
	<?php if (!empty($content['Block'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Page Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Show Title'); ?></th>
		<th><?php echo __('Controller Action'); ?></th>
		<th><?php echo __('Root'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Thread Num'); ?></th>
		<th><?php echo __('Col Num'); ?></th>
		<th><?php echo __('Row Num'); ?></th>
		<th><?php echo __('Display Flag'); ?></th>
		<th><?php echo __('Display From Date'); ?></th>
		<th><?php echo __('Display To Date'); ?></th>
		<th><?php echo __('Theme Name'); ?></th>
		<th><?php echo __('Temp Name'); ?></th>
		<th><?php echo __('Left Margin'); ?></th>
		<th><?php echo __('Right Margin'); ?></th>
		<th><?php echo __('Top Margin'); ?></th>
		<th><?php echo __('Bottom Margin'); ?></th>
		<th><?php echo __('Min Width Size'); ?></th>
		<th><?php echo __('Min Height Size'); ?></th>
		<th><?php echo __('Lock Authority Num'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Block'] as $block): ?>
		<tr>
			<td><?php echo $block['id']; ?></td>
			<td><?php echo $block['page_id']; ?></td>
			<td><?php echo $block['content_id']; ?></td>
			<td><?php echo $block['module_id']; ?></td>
			<td><?php echo $block['title']; ?></td>
			<td><?php echo $block['show_title']; ?></td>
			<td><?php echo $block['controller_action']; ?></td>
			<td><?php echo $block['root']; ?></td>
			<td><?php echo $block['parent_id']; ?></td>
			<td><?php echo $block['thread_num']; ?></td>
			<td><?php echo $block['col_num']; ?></td>
			<td><?php echo $block['row_num']; ?></td>
			<td><?php echo $block['display_flag']; ?></td>
			<td><?php echo $block['display_from_date']; ?></td>
			<td><?php echo $block['display_to_date']; ?></td>
			<td><?php echo $block['theme_name']; ?></td>
			<td><?php echo $block['temp_name']; ?></td>
			<td><?php echo $block['left_margin']; ?></td>
			<td><?php echo $block['right_margin']; ?></td>
			<td><?php echo $block['top_margin']; ?></td>
			<td><?php echo $block['bottom_margin']; ?></td>
			<td><?php echo $block['min_width_size']; ?></td>
			<td><?php echo $block['min_height_size']; ?></td>
			<td><?php echo $block['lock_authority_num']; ?></td>
			<td><?php echo $block['created']; ?></td>
			<td><?php echo $block['created_user']; ?></td>
			<td><?php echo $block['created_user_name']; ?></td>
			<td><?php echo $block['modified']; ?></td>
			<td><?php echo $block['modified_user']; ?></td>
			<td><?php echo $block['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blocks', 'action' => 'view', $block['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blocks', 'action' => 'edit', $block['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blocks', 'action' => 'delete', $block['id']), null, __('Are you sure you want to delete # %s?', $block['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Comments'); ?></h3>
	<?php if (!empty($content['BlogComment'])): ?>
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
	<?php foreach ($content['BlogComment'] as $blogComment): ?>
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
	<h3><?php echo __('Related Blog Posts'); ?></h3>
	<?php if (!empty($content['BlogPost'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Post Date'); ?></th>
		<th><?php echo __('Is Future'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Permalink'); ?></th>
		<th><?php echo __('Icon Name'); ?></th>
		<th><?php echo __('Revision Root'); ?></th>
		<th><?php echo __('Vote'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('Pre Change Flag'); ?></th>
		<th><?php echo __('Pre Change Date'); ?></th>
		<th><?php echo __('Post Password'); ?></th>
		<th><?php echo __('To Ping'); ?></th>
		<th><?php echo __('Pinged'); ?></th>
		<th><?php echo __('Approved Comment Count'); ?></th>
		<th><?php echo __('Comment Count'); ?></th>
		<th><?php echo __('Approved Trackback Count'); ?></th>
		<th><?php echo __('Trackback Count'); ?></th>
		<th><?php echo __('Vote Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['BlogPost'] as $blogPost): ?>
		<tr>
			<td><?php echo $blogPost['id']; ?></td>
			<td><?php echo $blogPost['content_id']; ?></td>
			<td><?php echo $blogPost['post_date']; ?></td>
			<td><?php echo $blogPost['is_future']; ?></td>
			<td><?php echo $blogPost['title']; ?></td>
			<td><?php echo $blogPost['permalink']; ?></td>
			<td><?php echo $blogPost['icon_name']; ?></td>
			<td><?php echo $blogPost['revision_root']; ?></td>
			<td><?php echo $blogPost['vote']; ?></td>
			<td><?php echo $blogPost['status']; ?></td>
			<td><?php echo $blogPost['is_approved']; ?></td>
			<td><?php echo $blogPost['pre_change_flag']; ?></td>
			<td><?php echo $blogPost['pre_change_date']; ?></td>
			<td><?php echo $blogPost['post_password']; ?></td>
			<td><?php echo $blogPost['to_ping']; ?></td>
			<td><?php echo $blogPost['pinged']; ?></td>
			<td><?php echo $blogPost['approved_comment_count']; ?></td>
			<td><?php echo $blogPost['comment_count']; ?></td>
			<td><?php echo $blogPost['approved_trackback_count']; ?></td>
			<td><?php echo $blogPost['trackback_count']; ?></td>
			<td><?php echo $blogPost['vote_count']; ?></td>
			<td><?php echo $blogPost['created']; ?></td>
			<td><?php echo $blogPost['created_user']; ?></td>
			<td><?php echo $blogPost['created_user_name']; ?></td>
			<td><?php echo $blogPost['modified']; ?></td>
			<td><?php echo $blogPost['modified_user']; ?></td>
			<td><?php echo $blogPost['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_posts', 'action' => 'view', $blogPost['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_posts', 'action' => 'edit', $blogPost['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_posts', 'action' => 'delete', $blogPost['id']), null, __('Are you sure you want to delete # %s?', $blogPost['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Term Links'); ?></h3>
	<?php if (!empty($content['BlogTermLink'])): ?>
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
	<?php foreach ($content['BlogTermLink'] as $blogTermLink): ?>
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
<div class="related">
	<h3><?php echo __('Related Blog Terms'); ?></h3>
	<?php if (!empty($content['BlogTerm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Taxonomy'); ?></th>
		<th><?php echo __('Checked'); ?></th>
		<th><?php echo __('Parent'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['BlogTerm'] as $blogTerm): ?>
		<tr>
			<td><?php echo $blogTerm['id']; ?></td>
			<td><?php echo $blogTerm['content_id']; ?></td>
			<td><?php echo $blogTerm['name']; ?></td>
			<td><?php echo $blogTerm['slug']; ?></td>
			<td><?php echo $blogTerm['taxonomy']; ?></td>
			<td><?php echo $blogTerm['checked']; ?></td>
			<td><?php echo $blogTerm['parent']; ?></td>
			<td><?php echo $blogTerm['count']; ?></td>
			<td><?php echo $blogTerm['created']; ?></td>
			<td><?php echo $blogTerm['created_user']; ?></td>
			<td><?php echo $blogTerm['created_user_name']; ?></td>
			<td><?php echo $blogTerm['modified']; ?></td>
			<td><?php echo $blogTerm['modified_user']; ?></td>
			<td><?php echo $blogTerm['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blog_terms', 'action' => 'view', $blogTerm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_terms', 'action' => 'edit', $blogTerm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_terms', 'action' => 'delete', $blogTerm['id']), null, __('Are you sure you want to delete # %s?', $blogTerm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog Term'), array('controller' => 'blog_terms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Blogs'); ?></h3>
	<?php if (!empty($content['Blog'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Post Hierarchy'); ?></th>
		<th><?php echo __('Term Hierarchy'); ?></th>
		<th><?php echo __('Vote Flag'); ?></th>
		<th><?php echo __('Sns Flag'); ?></th>
		<th><?php echo __('New Period'); ?></th>
		<th><?php echo __('Mail Flag'); ?></th>
		<th><?php echo __('Mail Hierarchy'); ?></th>
		<th><?php echo __('Mail Subject'); ?></th>
		<th><?php echo __('Mail Body'); ?></th>
		<th><?php echo __('Comment Flag'); ?></th>
		<th><?php echo __('Comment Required Name'); ?></th>
		<th><?php echo __('Comment Image Auth'); ?></th>
		<th><?php echo __('Comment Hierarchy'); ?></th>
		<th><?php echo __('Comment Mail Flag'); ?></th>
		<th><?php echo __('Comment Mail Hierarchy'); ?></th>
		<th><?php echo __('Comment Mail Subject'); ?></th>
		<th><?php echo __('Comment Mail Body'); ?></th>
		<th><?php echo __('Trackback Transmit Flag'); ?></th>
		<th><?php echo __('Trackback Receive Flag'); ?></th>
		<th><?php echo __('Transmit Blog Name'); ?></th>
		<th><?php echo __('Approved Flag'); ?></th>
		<th><?php echo __('Approved Pre Change Flag'); ?></th>
		<th><?php echo __('Approved Mail Flag'); ?></th>
		<th><?php echo __('Approved Mail Subject'); ?></th>
		<th><?php echo __('Approved Mail Body'); ?></th>
		<th><?php echo __('Comment Approved Flag'); ?></th>
		<th><?php echo __('Trackback Approved Flag'); ?></th>
		<th><?php echo __('Comment Approved Mail Flag'); ?></th>
		<th><?php echo __('Comment Approved Mail Subject'); ?></th>
		<th><?php echo __('Comment Approved Mail Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['Blog'] as $blog): ?>
		<tr>
			<td><?php echo $blog['id']; ?></td>
			<td><?php echo $blog['content_id']; ?></td>
			<td><?php echo $blog['post_hierarchy']; ?></td>
			<td><?php echo $blog['term_hierarchy']; ?></td>
			<td><?php echo $blog['vote_flag']; ?></td>
			<td><?php echo $blog['sns_flag']; ?></td>
			<td><?php echo $blog['new_period']; ?></td>
			<td><?php echo $blog['mail_flag']; ?></td>
			<td><?php echo $blog['mail_hierarchy']; ?></td>
			<td><?php echo $blog['mail_subject']; ?></td>
			<td><?php echo $blog['mail_body']; ?></td>
			<td><?php echo $blog['comment_flag']; ?></td>
			<td><?php echo $blog['comment_required_name']; ?></td>
			<td><?php echo $blog['comment_image_auth']; ?></td>
			<td><?php echo $blog['comment_hierarchy']; ?></td>
			<td><?php echo $blog['comment_mail_flag']; ?></td>
			<td><?php echo $blog['comment_mail_hierarchy']; ?></td>
			<td><?php echo $blog['comment_mail_subject']; ?></td>
			<td><?php echo $blog['comment_mail_body']; ?></td>
			<td><?php echo $blog['trackback_transmit_flag']; ?></td>
			<td><?php echo $blog['trackback_receive_flag']; ?></td>
			<td><?php echo $blog['transmit_blog_name']; ?></td>
			<td><?php echo $blog['approved_flag']; ?></td>
			<td><?php echo $blog['approved_pre_change_flag']; ?></td>
			<td><?php echo $blog['approved_mail_flag']; ?></td>
			<td><?php echo $blog['approved_mail_subject']; ?></td>
			<td><?php echo $blog['approved_mail_body']; ?></td>
			<td><?php echo $blog['comment_approved_flag']; ?></td>
			<td><?php echo $blog['trackback_approved_flag']; ?></td>
			<td><?php echo $blog['comment_approved_mail_flag']; ?></td>
			<td><?php echo $blog['comment_approved_mail_subject']; ?></td>
			<td><?php echo $blog['comment_approved_mail_body']; ?></td>
			<td><?php echo $blog['created']; ?></td>
			<td><?php echo $blog['created_user']; ?></td>
			<td><?php echo $blog['created_user_name']; ?></td>
			<td><?php echo $blog['modified']; ?></td>
			<td><?php echo $blog['modified_user']; ?></td>
			<td><?php echo $blog['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'blogs', 'action' => 'view', $blog['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'blogs', 'action' => 'edit', $blog['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blogs', 'action' => 'delete', $blog['id']), null, __('Are you sure you want to delete # %s?', $blog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blog'), array('controller' => 'blogs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Upload Links'); ?></h3>
	<?php if (!empty($content['UploadLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Upload Id'); ?></th>
		<th><?php echo __('Plugin'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Field Name'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Is Use'); ?></th>
		<th><?php echo __('Download Password'); ?></th>
		<th><?php echo __('Check Component Action'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['UploadLink'] as $uploadLink): ?>
		<tr>
			<td><?php echo $uploadLink['id']; ?></td>
			<td><?php echo $uploadLink['upload_id']; ?></td>
			<td><?php echo $uploadLink['plugin']; ?></td>
			<td><?php echo $uploadLink['content_id']; ?></td>
			<td><?php echo $uploadLink['plugin_unique']; ?></td>
			<td><?php echo $uploadLink['model_name']; ?></td>
			<td><?php echo $uploadLink['field_name']; ?></td>
			<td><?php echo $uploadLink['access_hierarchy']; ?></td>
			<td><?php echo $uploadLink['is_use']; ?></td>
			<td><?php echo $uploadLink['download_password']; ?></td>
			<td><?php echo $uploadLink['check_component_action']; ?></td>
			<td><?php echo $uploadLink['created']; ?></td>
			<td><?php echo $uploadLink['created_user']; ?></td>
			<td><?php echo $uploadLink['created_user_name']; ?></td>
			<td><?php echo $uploadLink['modified']; ?></td>
			<td><?php echo $uploadLink['modified_user']; ?></td>
			<td><?php echo $uploadLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'upload_links', 'action' => 'view', $uploadLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'upload_links', 'action' => 'edit', $uploadLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'upload_links', 'action' => 'delete', $uploadLink['id']), null, __('Are you sure you want to delete # %s?', $uploadLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Groups'); ?></h3>
	<?php if (!empty($content['UserGroup'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($content['UserGroup'] as $userGroup): ?>
		<tr>
			<td><?php echo $userGroup['id']; ?></td>
			<td><?php echo $userGroup['module_id']; ?></td>
			<td><?php echo $userGroup['content_id']; ?></td>
			<td><?php echo $userGroup['name']; ?></td>
			<td><?php echo $userGroup['created']; ?></td>
			<td><?php echo $userGroup['created_user']; ?></td>
			<td><?php echo $userGroup['created_user_name']; ?></td>
			<td><?php echo $userGroup['modified']; ?></td>
			<td><?php echo $userGroup['modified_user']; ?></td>
			<td><?php echo $userGroup['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_groups', 'action' => 'view', $userGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_groups', 'action' => 'edit', $userGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_groups', 'action' => 'delete', $userGroup['id']), null, __('Are you sure you want to delete # %s?', $userGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
