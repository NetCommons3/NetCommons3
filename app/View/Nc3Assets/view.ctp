<div class="nc3Assets view">
<h2><?php echo __('Nc3 Asset'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hash Content'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['hash_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['plugin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($nc3Asset['Nc3Asset']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nc3 Asset'), array('action' => 'edit', $nc3Asset['Nc3Asset']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nc3 Asset'), array('action' => 'delete', $nc3Asset['Nc3Asset']['id']), null, __('Are you sure you want to delete # %s?', $nc3Asset['Nc3Asset']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nc3 Assets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nc3 Asset'), array('action' => 'add')); ?> </li>
	</ul>
</div>
