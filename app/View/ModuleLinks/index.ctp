<div class="moduleLinks index">
	<h2><?php echo __('Module Links'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('space_type'); ?></th>
			<th><?php echo $this->Paginator->sort('authority_id'); ?></th>
			<th><?php echo $this->Paginator->sort('room_num'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($moduleLinks as $moduleLink): ?>
	<tr>
		<td><?php echo h($moduleLink['ModuleLink']['id']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['space_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($moduleLink['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $moduleLink['Authority']['id'])); ?>
		</td>
		<td><?php echo h($moduleLink['ModuleLink']['room_num']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($moduleLink['Module']['id'], array('controller' => 'modules', 'action' => 'view', $moduleLink['Module']['id'])); ?>
		</td>
		<td><?php echo h($moduleLink['ModuleLink']['created']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($moduleLink['ModuleLink']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $moduleLink['ModuleLink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $moduleLink['ModuleLink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $moduleLink['ModuleLink']['id']), null, __('Are you sure you want to delete # %s?', $moduleLink['ModuleLink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Module Link'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
