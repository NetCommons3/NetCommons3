<div class="moduleLinks view">
<h2><?php echo __('Module Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Space Type'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['space_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduleLink['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $moduleLink['Authority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduleLink['Module']['id'], array('controller' => 'modules', 'action' => 'view', $moduleLink['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($moduleLink['ModuleLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module Link'), array('action' => 'edit', $moduleLink['ModuleLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Module Link'), array('action' => 'delete', $moduleLink['ModuleLink']['id']), null, __('Are you sure you want to delete # %s?', $moduleLink['ModuleLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
