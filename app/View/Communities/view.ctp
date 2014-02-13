<div class="communities view">
<h2><?php echo __('Community'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($community['Community']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($community['Community']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($community['Community']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Upload'); ?></dt>
		<dd>
			<?php echo h($community['Community']['is_upload']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publication Range Flag'); ?></dt>
		<dd>
			<?php echo h($community['Community']['publication_range_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participate Force All Users'); ?></dt>
		<dd>
			<?php echo h($community['Community']['participate_force_all_users']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participate Flag'); ?></dt>
		<dd>
			<?php echo h($community['Community']['participate_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invite Hierarchy'); ?></dt>
		<dd>
			<?php echo h($community['Community']['invite_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Participate Notice'); ?></dt>
		<dd>
			<?php echo h($community['Community']['is_participate_notice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participate Notice Hierarchy'); ?></dt>
		<dd>
			<?php echo h($community['Community']['participate_notice_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Resign Notice'); ?></dt>
		<dd>
			<?php echo h($community['Community']['is_resign_notice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resign Notice Hierarchy'); ?></dt>
		<dd>
			<?php echo h($community['Community']['resign_notice_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($community['Community']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($community['Community']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($community['Community']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($community['Community']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($community['Community']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($community['Community']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Community'), array('action' => 'edit', $community['Community']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Community'), array('action' => 'delete', $community['Community']['id']), null, __('Are you sure you want to delete # %s?', $community['Community']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Communities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community'), array('action' => 'add')); ?> </li>
	</ul>
</div>
