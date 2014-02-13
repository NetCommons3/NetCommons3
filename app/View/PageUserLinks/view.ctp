<div class="pageUserLinks view">
<h2><?php echo __('Page User Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageUserLink['User']['id'], array('controller' => 'users', 'action' => 'view', $pageUserLink['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageUserLink['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $pageUserLink['Authority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($pageUserLink['PageUserLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page User Link'), array('action' => 'edit', $pageUserLink['PageUserLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page User Link'), array('action' => 'delete', $pageUserLink['PageUserLink']['id']), null, __('Are you sure you want to delete # %s?', $pageUserLink['PageUserLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
