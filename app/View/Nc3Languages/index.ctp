<div class="nc3Languages index">
	<h2><?php echo __('Nc3 Languages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('language'); ?></th>
			<th><?php echo $this->Paginator->sort('display_name'); ?></th>
			<th><?php echo $this->Paginator->sort('display_sequence'); ?></th>
			<th><?php echo $this->Paginator->sort('display_flag'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nc3Languages as $nc3Language): ?>
	<tr>
		<td><?php echo h($nc3Language['Nc3Language']['language']); ?>&nbsp;</td>
		<td><?php echo h($nc3Language['Nc3Language']['display_name']); ?>&nbsp;</td>
		<td><?php echo h($nc3Language['Nc3Language']['display_sequence']); ?>&nbsp;</td>
		<td><?php echo h($nc3Language['Nc3Language']['display_flag']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nc3Language['Nc3Language']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nc3Language['Nc3Language']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nc3Language['Nc3Language']['id']), null, __('Are you sure you want to delete # %s?', $nc3Language['Nc3Language']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Nc3 Language'), array('action' => 'add')); ?></li>
	</ul>
</div>
