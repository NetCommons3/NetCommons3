<div class="assets view">
<h2><?php echo __('Asset'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hash Content'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['hash_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['plugin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($asset['Asset']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Asset'), array('action' => 'edit', $asset['Asset']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Asset'), array('action' => 'delete', $asset['Asset']['id']), null, __('Are you sure you want to delete # %s?', $asset['Asset']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asset'), array('action' => 'add')); ?> </li>
	</ul>
</div>
