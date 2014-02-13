<div class="configLangs index">
	<h2><?php echo __('Config Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('config_name'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($configLangs as $configLang): ?>
	<tr>
		<td><?php echo h($configLang['ConfigLang']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($configLang['Module']['id'], array('controller' => 'modules', 'action' => 'view', $configLang['Module']['id'])); ?>
		</td>
		<td><?php echo h($configLang['ConfigLang']['config_name']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['lang']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['value']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['created']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['modified']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($configLang['ConfigLang']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $configLang['ConfigLang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $configLang['ConfigLang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $configLang['ConfigLang']['id']), null, __('Are you sure you want to delete # %s?', $configLang['ConfigLang']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Config Lang'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
