<div class="blogTerms index">
	<h2><?php echo __('Blog Terms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('content_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('taxonomy'); ?></th>
			<th><?php echo $this->Paginator->sort('checked'); ?></th>
			<th><?php echo $this->Paginator->sort('parent'); ?></th>
			<th><?php echo $this->Paginator->sort('count'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($blogTerms as $blogTerm): ?>
	<tr>
		<td><?php echo h($blogTerm['BlogTerm']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($blogTerm['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogTerm['Content']['id'])); ?>
		</td>
		<td><?php echo h($blogTerm['BlogTerm']['name']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['slug']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['taxonomy']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['checked']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['parent']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['count']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['created']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['modified']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($blogTerm['BlogTerm']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogTerm['BlogTerm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogTerm['BlogTerm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogTerm['BlogTerm']['id']), null, __('Are you sure you want to delete # %s?', $blogTerm['BlogTerm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Blog Term'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('controller' => 'blog_term_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('controller' => 'blog_term_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
