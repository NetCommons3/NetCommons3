<div class="backgrounds view">
<h2><?php echo __('Background'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($background['Background']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Num'); ?></dt>
		<dd>
			<?php echo h($background['Background']['group_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($background['Background']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($background['Background']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($background['Background']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($background['Background']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo h($background['Background']['file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Width'); ?></dt>
		<dd>
			<?php echo h($background['Background']['file_width']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Height'); ?></dt>
		<dd>
			<?php echo h($background['Background']['file_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($background['Background']['file_size']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Background'), array('action' => 'edit', $background['Background']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Background'), array('action' => 'delete', $background['Background']['id']), null, __('Are you sure you want to delete # %s?', $background['Background']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Backgrounds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Background'), array('action' => 'add')); ?> </li>
	</ul>
</div>
