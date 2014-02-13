<div class="announcementEdits view">
<h2><?php echo __('Announcement Edit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($announcementEdit['Content']['title'], array('controller' => 'contents', 'action' => 'view', $announcementEdit['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Hierarchy'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['post_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Flag'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['approved_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Pre Change Flag'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['approved_pre_change_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Flag'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Subject'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved Mail Body'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['approved_mail_body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($announcementEdit['AnnouncementEdit']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Announcement Edit'), array('action' => 'edit', $announcementEdit['AnnouncementEdit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Announcement Edit'), array('action' => 'delete', $announcementEdit['AnnouncementEdit']['id']), null, __('Are you sure you want to delete # %s?', $announcementEdit['AnnouncementEdit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Announcement Edits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Announcement Edit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
