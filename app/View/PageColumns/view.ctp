<div class="pageColumns view">
<h2><?php echo __('Page Column'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scope'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['scope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageColumn['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageColumn['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header Page'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['header_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Left Page'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['left_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Right Page'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['right_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Footer Page'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['footer_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageColumn['PageColumn']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Column'), array('action' => 'edit', $pageColumn['PageColumn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Column'), array('action' => 'delete', $pageColumn['PageColumn']['id']), null, __('Are you sure you want to delete # %s?', $pageColumn['PageColumn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Columns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Column'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
