<div class="pageSumViews view">
<h2><?php echo __('Page Sum View'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageSumView['User']['id'], array('controller' => 'users', 'action' => 'view', $pageSumView['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageSumView['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageSumView['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sum'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['sum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageSumView['PageSumView']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Sum View'), array('action' => 'edit', $pageSumView['PageSumView']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Sum View'), array('action' => 'delete', $pageSumView['PageSumView']['id']), null, __('Are you sure you want to delete # %s?', $pageSumView['PageSumView']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Sum Views'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
