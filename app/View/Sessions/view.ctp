<div class="sessions view">
<h2><?php echo __('Session'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($session['Session']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($session['Session']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expires'); ?></dt>
		<dd>
			<?php echo h($session['Session']['expires']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Session'), array('action' => 'edit', $session['Session']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Session'), array('action' => 'delete', $session['Session']['id']), null, __('Are you sure you want to delete # %s?', $session['Session']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Session'), array('action' => 'add')); ?> </li>
	</ul>
</div>
