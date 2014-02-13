<div class="whatsnewSelectRooms view">
<h2><?php echo __('Whatsnew Select Room'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($whatsnewSelectRoom['WhatsnewSelectRoom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($whatsnewSelectRoom['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $whatsnewSelectRoom['Block']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($whatsnewSelectRoom['WhatsnewSelectRoom']['room_num']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Whatsnew Select Room'), array('action' => 'edit', $whatsnewSelectRoom['WhatsnewSelectRoom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Whatsnew Select Room'), array('action' => 'delete', $whatsnewSelectRoom['WhatsnewSelectRoom']['id']), null, __('Are you sure you want to delete # %s?', $whatsnewSelectRoom['WhatsnewSelectRoom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Select Rooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Select Room'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
