<div class="blogTermLinks view">
<h2><?php echo __('Blog Term Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogTermLink['Content']['title'], array('controller' => 'contents', 'action' => 'view', $blogTermLink['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blog Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogTermLink['BlogPost']['title'], array('controller' => 'blog_posts', 'action' => 'view', $blogTermLink['BlogPost']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blog Term'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogTermLink['BlogTerm']['name'], array('controller' => 'blog_terms', 'action' => 'view', $blogTermLink['BlogTerm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blogTermLink['BlogTermLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog Term Link'), array('action' => 'edit', $blogTermLink['BlogTermLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog Term Link'), array('action' => 'delete', $blogTermLink['BlogTermLink']['id']), null, __('Are you sure you want to delete # %s?', $blogTermLink['BlogTermLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Term Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Posts'), array('controller' => 'blog_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Post'), array('controller' => 'blog_posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Terms'), array('controller' => 'blog_terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Term'), array('controller' => 'blog_terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
