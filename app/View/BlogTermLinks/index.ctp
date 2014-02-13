<div class="blogTermLinks index">
	<h2><?php echo __('Blog Term Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('blog_post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('blog_term_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogTermLinks as $blogTermLink): ?>
	<tr>
		<td><?php echo h($blogTermLink['BlogTermLink']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blogTermLink['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogTermLink['Content']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($blogTermLink['BlogPost']['title'], array('controller' => 'blog_posts', 'action' => 'view', $blogTermLink['BlogPost']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($blogTermLink['BlogTerm']['name'], array('controller' => 'blog_terms', 'action' => 'view', $blogTermLink['BlogTerm']['id'])); ?>
		</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blogTermLink['BlogTermLink']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogTermLink['BlogTermLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogTermLink['BlogTermLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogTermLink['BlogTermLink']['id']), null, __('Are you sure you want to delete # %s?', $blogTermLink['BlogTermLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Terms'), array('controller' => 'blog_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term'), array('controller' => 'blog_terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
