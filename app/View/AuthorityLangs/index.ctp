<div class="authorityLangs index">
	<h2><?php echo __('Authority Langs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('authority_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authorityLangs as $authorityLang): ?>
	<tr>
		<td><?php echo h($authorityLang['AuthorityLang']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($authorityLang['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $authorityLang['Authority']['id'])); ?>
		</td>
		<td><?php echo h($authorityLang['AuthorityLang']['lang']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['name']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['created']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['modified']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($authorityLang['AuthorityLang']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $authorityLang['AuthorityLang']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $authorityLang['AuthorityLang']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $authorityLang['AuthorityLang']['id']), null, __('Are you sure you want to delete # %s?', $authorityLang['AuthorityLang']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Authority Lang'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
