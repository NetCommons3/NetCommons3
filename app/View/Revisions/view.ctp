<div class="revisions view">
<h2><?php echo __('Revision'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Root'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['revision_root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pointer'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['pointer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved Pointer'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['is_approved_pointer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Name'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['revision_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($revision['Content']['title'], array('controller' => 'contents', 'action' => 'view', $revision['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($revision['Revision']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Revision'), array('action' => 'edit', $revision['Revision']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Revision'), array('action' => 'delete', $revision['Revision']['id']), null, __('Are you sure you want to delete # %s?', $revision['Revision']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Revisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Revision'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
