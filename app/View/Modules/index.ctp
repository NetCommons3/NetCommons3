<div class="modules index">
	<h2><?php echo __('Modules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_name'); ?></th>
			<th><?php echo $this->Paginator->sort('version'); ?></th>
			<th><?php echo $this->Paginator->sort('system_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('disposition_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('controller_action'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_controller_action'); ?></th>
			<th><?php echo $this->Paginator->sort('style_controller_action'); ?></th>
			<th><?php echo $this->Paginator->sort('display_sequence'); ?></th>
			<th><?php echo $this->Paginator->sort('module_icon'); ?></th>
			<th><?php echo $this->Paginator->sort('temp_name'); ?></th>
			<th><?php echo $this->Paginator->sort('content_has_one'); ?></th>
			<th><?php echo $this->Paginator->sort('copy_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('shortcut_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('move_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modules as $module): ?>
	<tr>
		<td><?php echo h($module['Module']['id']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['dir_name']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['version']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['system_flag']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['disposition_flag']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['controller_action']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['edit_controller_action']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['style_controller_action']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['display_sequence']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['module_icon']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['temp_name']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['content_has_one']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['copy_operation']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['shortcut_operation']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['move_operation']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['created']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['modified']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($module['Module']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $module['Module']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $module['Module']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $module['Module']['id']), null, __('Are you sure you want to delete # %s?', $module['Module']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Module'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Config Langs'), array('controller' => 'config_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config Lang'), array('controller' => 'config_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('controller' => 'configs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('controller' => 'configs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
