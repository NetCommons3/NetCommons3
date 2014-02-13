<div class="configs index">
	<h2><?php echo __('Configs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('module_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('options'); ?></th>
			<th><?php echo $this->Paginator->sort('domain'); ?></th>
			<th><?php echo $this->Paginator->sort('attribute'); ?></th>
			<th><?php echo $this->Paginator->sort('required'); ?></th>
			<th><?php echo $this->Paginator->sort('minlength'); ?></th>
			<th><?php echo $this->Paginator->sort('maxlength'); ?></th>
			<th><?php echo $this->Paginator->sort('regexp'); ?></th>
			<th><?php echo $this->Paginator->sort('lang_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($configs as $config): ?>
	<tr>
		<td><?php echo h($config['Config']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($config['Module']['id'], array('controller' => 'modules', 'action' => 'view', $config['Module']['id'])); ?>
		</td>
		<td><?php echo h($config['Config']['category']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['name']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['type']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['title']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['value']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['description']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['options']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['domain']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['attribute']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['required']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['minlength']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['maxlength']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['regexp']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['lang_flag']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['created']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['modified']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($config['Config']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $config['Config']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $config['Config']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $config['Config']['id']), null, __('Are you sure you want to delete # %s?', $config['Config']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
