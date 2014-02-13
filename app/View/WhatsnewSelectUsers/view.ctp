<div class="whatsnewSelectUsers view">
<h2><?php echo __('Whatsnew Select User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($whatsnewSelectUser['WhatsnewSelectUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($whatsnewSelectUser['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $whatsnewSelectUser['Block']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($whatsnewSelectUser['User']['id'], array('controller' => 'users', 'action' => 'view', $whatsnewSelectUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Whatsnew Select User'), array('action' => 'edit', $whatsnewSelectUser['WhatsnewSelectUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Whatsnew Select User'), array('action' => 'delete', $whatsnewSelectUser['WhatsnewSelectUser']['id']), null, __('Are you sure you want to delete # %s?', $whatsnewSelectUser['WhatsnewSelectUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
