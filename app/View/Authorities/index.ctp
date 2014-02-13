<div class="authorities index">
	<h2><?php echo __('Authorities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('default_name'); ?></th>
			<th><?php echo $this->Paginator->sort('system_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_creating_community'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_new_participant'); ?></th>
			<th><?php echo $this->Paginator->sort('myportal_use_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_myportal_viewing_hierarchy'); ?></th>
			<th><?php echo $this->Paginator->sort('private_use_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('public_createroom_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('group_createroom_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('myportal_createroom_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('private_createroom_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_htmltag_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_meta_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_theme_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_style_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_layout_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_column_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_attachment'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_video'); ?></th>
			<th><?php echo $this->Paginator->sort('max_size'); ?></th>
			<th><?php echo $this->Paginator->sort('change_leftcolumn_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('change_rightcolumn_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('change_headercolumn_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('change_footercolumn_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('display_participants_editing'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_move_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_copy_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_shortcut_operation'); ?></th>
			<th><?php echo $this->Paginator->sort('allow_operation_of_shortcut'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user'); ?></th>
			<th><?php echo $this->Paginator->sort('created_user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_user_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($authorities as $authority): ?>
	<tr>
		<td><?php echo h($authority['Authority']['id']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['default_name']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['system_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_creating_community']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_new_participant']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['myportal_use_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_myportal_viewing_hierarchy']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['private_use_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['public_createroom_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['group_createroom_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['myportal_createroom_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['private_createroom_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_htmltag_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_meta_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_theme_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_style_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_layout_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_column_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_attachment']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_video']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['max_size']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['change_leftcolumn_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['change_rightcolumn_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['change_headercolumn_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['change_footercolumn_flag']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['display_participants_editing']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_move_operation']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_copy_operation']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_shortcut_operation']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['allow_operation_of_shortcut']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['created']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['created_user']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['created_user_name']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['modified']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['modified_user']); ?>&nbsp;</td>
		<td><?php echo h($authority['Authority']['modified_user_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $authority['Authority']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $authority['Authority']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $authority['Authority']['id']), null, __('Are you sure you want to delete # %s?', $authority['Authority']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Authority'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Authority Langs'), array('controller' => 'authority_langs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority Lang'), array('controller' => 'authority_langs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module Links'), array('controller' => 'module_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module Link'), array('controller' => 'module_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Module System Links'), array('controller' => 'module_system_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module System Link'), array('controller' => 'module_system_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('controller' => 'page_user_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
