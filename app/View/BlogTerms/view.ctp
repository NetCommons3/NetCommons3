<div class="blogTerms view">
<h2><?php echo __('Blog Term'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogTerm['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogTerm['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxonomy'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['taxonomy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Checked'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['checked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blogTerm['BlogTerm']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog Term'), array('action' => 'edit', $blogTerm['BlogTerm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog Term'), array('action' => 'delete', $blogTerm['BlogTerm']['id']), null, __('Are you sure you want to delete # %s?', $blogTerm['BlogTerm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Terms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Blog Term Links'); ?></h3>
	<?php if (!empty($blogTerm['BlogTermLink'])): ?>
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
	<?php foreach ($blogTerm['BlogTermLink'] as $blogTermLink): ?>
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
