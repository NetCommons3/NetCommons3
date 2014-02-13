<div class="nc3Languages view">
<h2><?php echo __('Nc3 Language'); ?></h2>
	<dl>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo h($nc3Language['Nc3Language']['language']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($nc3Language['Nc3Language']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Sequence'); ?></dt>
		<dd>
			<?php echo h($nc3Language['Nc3Language']['display_sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($nc3Language['Nc3Language']['display_flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nc3 Language'), array('action' => 'edit', $nc3Language['Nc3Language']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nc3 Language'), array('action' => 'delete', $nc3Language['Nc3Language']['id']), null, __('Are you sure you want to delete # %s?', $nc3Language['Nc3Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nc3 Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nc3 Language'), array('action' => 'add')); ?> </li>
	</ul>
</div>
