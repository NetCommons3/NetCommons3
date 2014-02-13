<div class="passports view">
<h2><?php echo __('Passport'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($passport['Passport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($passport['User']['id'], array('controller' => 'users', 'action' => 'view', $passport['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport'); ?></dt>
		<dd>
			<?php echo h($passport['Passport']['passport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($passport['Passport']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Passport'), array('action' => 'edit', $passport['Passport']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Passport'), array('action' => 'delete', $passport['Passport']['id']), null, __('Are you sure you want to delete # %s?', $passport['Passport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Passports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passport'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
