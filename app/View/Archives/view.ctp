<div class="archives view">
<h2><?php echo __('Archive'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Model Name'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['parent_model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Archive'); ?></dt>
		<dd>
			<?php echo $this->Html->link($archive['ParentArchive']['title'], array('controller' => 'archives', 'action' => 'view', $archive['ParentArchive']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($archive['Module']['id'], array('controller' => 'modules', 'action' => 'view', $archive['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($archive['Content']['title'], array('controller' => 'contents', 'action' => 'view', $archive['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Name'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin Unique'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['plugin_unique']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($archive['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $archive['UserGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access Hierarchy'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['access_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Search Content'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['search_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($archive['Archive']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Archive'), array('action' => 'edit', $archive['Archive']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Archive'), array('action' => 'delete', $archive['Archive']['id']), null, __('Are you sure you want to delete # %s?', $archive['Archive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archive'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Archives'), array('controller' => 'archives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Archives'); ?></h3>
	<?php if (!empty($archive['ChildArchive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Model Name'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Module Id'); ?></th>
		<th><?php echo __('Content Id'); ?></th>
		<th><?php echo __('Model Name'); ?></th>
		<th><?php echo __('Plugin Unique'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Is Approved'); ?></th>
		<th><?php echo __('User Group Id'); ?></th>
		<th><?php echo __('Access Hierarchy'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Search Content'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created User'); ?></th>
		<th><?php echo __('Created User Name'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified User'); ?></th>
		<th><?php echo __('Modified User Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($archive['ChildArchive'] as $childArchive): ?>
		<tr>
			<td><?php echo $childArchive['id']; ?></td>
			<td><?php echo $childArchive['parent_model_name']; ?></td>
			<td><?php echo $childArchive['parent_id']; ?></td>
			<td><?php echo $childArchive['module_id']; ?></td>
			<td><?php echo $childArchive['content_id']; ?></td>
			<td><?php echo $childArchive['model_name']; ?></td>
			<td><?php echo $childArchive['plugin_unique']; ?></td>
			<td><?php echo $childArchive['status']; ?></td>
			<td><?php echo $childArchive['is_approved']; ?></td>
			<td><?php echo $childArchive['user_group_id']; ?></td>
			<td><?php echo $childArchive['access_hierarchy']; ?></td>
			<td><?php echo $childArchive['count']; ?></td>
			<td><?php echo $childArchive['title']; ?></td>
			<td><?php echo $childArchive['content']; ?></td>
			<td><?php echo $childArchive['search_content']; ?></td>
			<td><?php echo $childArchive['url']; ?></td>
			<td><?php echo $childArchive['created']; ?></td>
			<td><?php echo $childArchive['created_user']; ?></td>
			<td><?php echo $childArchive['created_user_name']; ?></td>
			<td><?php echo $childArchive['modified']; ?></td>
			<td><?php echo $childArchive['modified_user']; ?></td>
			<td><?php echo $childArchive['modified_user_name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'archives', 'action' => 'view', $childArchive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'archives', 'action' => 'edit', $childArchive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'archives', 'action' => 'delete', $childArchive['id']), null, __('Are you sure you want to delete # %s?', $childArchive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Archive'), array('controller' => 'archives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
