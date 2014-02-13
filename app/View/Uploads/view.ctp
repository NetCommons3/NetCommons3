<div class="uploads view">
<h2><?php echo __('Upload'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($upload['User']['id'], array('controller' => 'users', 'action' => 'view', $upload['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['alt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caption'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['caption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mimetype'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['mimetype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extension'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['extension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['plugin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload Model Name'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['upload_model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Delete From Library'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['is_delete_from_library']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Use'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['is_use']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Wysiwyg'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['is_wysiwyg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Download Count'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['download_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Month'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($upload['Upload']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload'), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload'), array('action' => 'delete', $upload['Upload']['id']), null, __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('controller' => 'upload_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Upload Links'); ?></h3>
	<?php if (!empty($upload['UploadLink'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Upload Id'); ?></th>
		<th><?php echo __('Plugin'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Field Name'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Is Use'); ?></th>
		<th><?php echo __('Download Password'); ?></th>
		<th><?php echo __('Check Component Action'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($upload['UploadLink'] as $uploadLink): ?>
		<tr>
			<td><?php echo $uploadLink['id']; ?></td>
			<td><?php echo $uploadLink['upload_id']; ?></td>
			<td><?php echo $uploadLink['plugin']; ?></td>
			<td><?php echo $uploadLink['content_id']; ?></td>
			<td><?php echo $uploadLink['plugin_unique']; ?></td>
			<td><?php echo $uploadLink['model_name']; ?></td>
			<td><?php echo $uploadLink['field_name']; ?></td>
			<td><?php echo $uploadLink['access_hierarchy']; ?></td>
			<td><?php echo $uploadLink['is_use']; ?></td>
			<td><?php echo $uploadLink['download_password']; ?></td>
			<td><?php echo $uploadLink['check_component_action']; ?></td>
			<td><?php echo $uploadLink['created']; ?></td>
			<td><?php echo $uploadLink['created_user']; ?></td>
			<td><?php echo $uploadLink['created_user_name']; ?></td>
			<td><?php echo $uploadLink['modified']; ?></td>
			<td><?php echo $uploadLink['modified_user']; ?></td>
			<td><?php echo $uploadLink['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'upload_links', 'action' => 'view', $uploadLink['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'upload_links', 'action' => 'edit', $uploadLink['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'upload_links', 'action' => 'delete', $uploadLink['id']), null, __('Are you sure you want to delete # %s?', $uploadLink['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Upload Link'), array('controller' => 'upload_links', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
