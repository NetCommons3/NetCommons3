<div class="announcements view">
<h2><?php echo __('Announcement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($announcement['Content']['title'], array('controller' => 'contents', 'action' => 'view', $announcement['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Root'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['revision_root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Approved'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['is_approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre Change Flag'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['pre_change_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pre Change Date'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['pre_change_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($announcement['Announcement']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Announcement'), array('action' => 'edit', $announcement['Announcement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Announcement'), array('action' => 'delete', $announcement['Announcement']['id']), null, __('Are you sure you want to delete # %s?', $announcement['Announcement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Announcements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Announcement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
