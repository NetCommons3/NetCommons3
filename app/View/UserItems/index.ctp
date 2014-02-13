<div class="userItems index">
	<h2><?php echo __('User Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('default_name'); ?></th>
			<th><?php echo $this->Paginator->sort('default_description'); ?></th>
			<th><?php echo $this->Paginator->sort('default_options'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_system'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_self_edit'); ?></th>
			<th><?php echo $this->Paginator->sort('required'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_duplicate'); ?></th>
			<th><?php echo $this->Paginator->sort('minlength'); ?></th>
			<th><?php echo $this->Paginator->sort('maxlength'); ?></th>
			<th><?php echo $this->Paginator->sort('regexp'); ?></th>
			<th><?php echo $this->Paginator->sort('display_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_public_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_email_reception_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('list_num'); ?></th>
			<th><?php echo $this->Paginator->sort('col_num'); ?></th>
			<th><?php echo $this->Paginator->sort('row_num'); ?></th>
			<th><?php echo $this->Paginator->sort('attribute'); ?></th>
			<th><?php echo $this->Paginator->sort('default_selected'); ?></th>
			<th><?php echo $this->Paginator->sort('display_title'); ?></th>
			<th><?php echo $this->Paginator->sort('is_lang'); ?></th>
			<th><?php echo $this->Paginator->sort('autoregist_use'); ?></th>
			<th><?php echo $this->Paginator->sort('autoregist_sendmail'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userItems as $userItem): ?>
	<tr>
		<td><?php echo h($userItem['UserItem']['id']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['default_name']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['default_description']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['default_options']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['type']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['tag_name']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['is_system']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['allow_self_edit']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['required']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['allow_duplicate']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['minlength']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['maxlength']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['regexp']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['display_flag']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['allow_public_flag']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['allow_email_reception_flag']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['list_num']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['col_num']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['row_num']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['attribute']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['default_selected']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['display_title']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['is_lang']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['autoregist_use']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['autoregist_sendmail']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['created']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['modified']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($userItem['UserItem']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userItem['UserItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userItem['UserItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userItem['UserItem']['id']), null, __('Are you sure you want to delete # %s?', $userItem['UserItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List User Item Authority Links'), array('controller' => 'user_item_authority_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Authority Link'), array('controller' => 'user_item_authority_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Langs'), array('controller' => 'user_item_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Lang'), array('controller' => 'user_item_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('controller' => 'user_item_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
