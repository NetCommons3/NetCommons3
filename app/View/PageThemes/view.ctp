<div class="pageThemes view">
<h2><?php echo __('Page Theme'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scope'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['scope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageTheme['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageTheme['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Theme Name'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['theme_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temp Name'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['temp_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Center Theme'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['center_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header Theme'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['header_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Left Theme'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['left_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Right Theme'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['right_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Footer Theme'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['footer_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageTheme['PageTheme']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Theme'), array('action' => 'edit', $pageTheme['PageTheme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Theme'), array('action' => 'delete', $pageTheme['PageTheme']['id']), null, __('Are you sure you want to delete # %s?', $pageTheme['PageTheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Theme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
