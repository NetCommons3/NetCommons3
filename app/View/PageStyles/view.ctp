<div class="pageStyles view">
<h2><?php echo __('Page Style'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scope'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['scope']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageStyle['Page']['id'], array('controller' => 'pages', 'action' => 'view', $pageStyle['Page']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Align'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['align']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Width'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Background Image'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['original_background_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Background Repeat'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['original_background_repeat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Background Position'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['original_background_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Background Attachment'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['original_background_attachment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageStyle['PageStyle']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Style'), array('action' => 'edit', $pageStyle['PageStyle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Style'), array('action' => 'delete', $pageStyle['PageStyle']['id']), null, __('Are you sure you want to delete # %s?', $pageStyle['PageStyle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Styles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Style'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pages'), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page'), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
