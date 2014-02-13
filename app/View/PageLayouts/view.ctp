<div class="pageLayouts view">
<h2><?php echo __('Page Layout'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scope'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['scope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageLayout['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageLayout['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Header'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['is_display_header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Left'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['is_display_left']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Right'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['is_display_right']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Footer'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['is_display_footer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageLayout['PageLayout']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Layout'), array('action' => 'edit', $pageLayout['PageLayout']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Layout'), array('action' => 'delete', $pageLayout['PageLayout']['id']), null, __('Are you sure you want to delete # %s?', $pageLayout['PageLayout']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Layouts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Layout'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
