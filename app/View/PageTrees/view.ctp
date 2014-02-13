<div class="pageTrees view">
<h2><?php echo __('Page Tree'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pageTree['PageTree']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Page Tree'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pageTree['ParentPageTree']['id'], array('controller' => 'page_trees', 'action' => 'view', $pageTree['ParentPageTree']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child'); ?></dt>
		<dd>
			<?php echo h($pageTree['PageTree']['child']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stratum Num'); ?></dt>
		<dd>
			<?php echo h($pageTree['PageTree']['stratum_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pageTree['PageTree']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pageTree['PageTree']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Page Tree'), array('action' => 'edit', $pageTree['PageTree']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Page Tree'), array('action' => 'delete', $pageTree['PageTree']['id']), null, __('Are you sure you want to delete # %s?', $pageTree['PageTree']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Trees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Tree'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Trees'), array('controller' => 'page_trees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Page Tree'), array('controller' => 'page_trees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Page Trees'); ?></h3>
	<?php if (!empty($pageTree['ChildPageTree'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Child'); ?></th>
		<th><?php echo __('Stratum Num'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pageTree['ChildPageTree'] as $childPageTree): ?>
		<tr>
			<td><?php echo $childPageTree['id']; ?></td>
			<td><?php echo $childPageTree['parent_id']; ?></td>
			<td><?php echo $childPageTree['child']; ?></td>
			<td><?php echo $childPageTree['stratum_num']; ?></td>
			<td><?php echo $childPageTree['created']; ?></td>
			<td><?php echo $childPageTree['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'page_trees', 'action' => 'view', $childPageTree['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'page_trees', 'action' => 'edit', $childPageTree['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'page_trees', 'action' => 'delete', $childPageTree['id']), null, __('Are you sure you want to delete # %s?', $childPageTree['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Page Tree'), array('controller' => 'page_trees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
