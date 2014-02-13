<div class="moduleSystemLinks view">
<h2><?php echo __('Module System Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduleSystemLink['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $moduleSystemLink['Authority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moduleSystemLink['Module']['id'], array('controller' => 'modules', 'action' => 'view', $moduleSystemLink['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hierarchy'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($moduleSystemLink['ModuleSystemLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module System Link'), array('action' => 'edit', $moduleSystemLink['ModuleSystemLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Module System Link'), array('action' => 'delete', $moduleSystemLink['ModuleSystemLink']['id']), null, __('Are you sure you want to delete # %s?', $moduleSystemLink['ModuleSystemLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
