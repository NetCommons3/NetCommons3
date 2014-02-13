<div class="blogStyles view">
<h2><?php echo __('Blog Style'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($blogStyle['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $blogStyle['Block']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Widget Type'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['widget_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['display_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col Num'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['col_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Num'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['row_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible Item'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['visible_item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Options'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['options']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($blogStyle['BlogStyle']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Blog Style'), array('action' => 'edit', $blogStyle['BlogStyle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Blog Style'), array('action' => 'delete', $blogStyle['BlogStyle']['id']), null, __('Are you sure you want to delete # %s?', $blogStyle['BlogStyle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Blog Styles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blog Style'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
