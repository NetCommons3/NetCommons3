<div class="languages view">
<h2><?php echo __('Language'); ?></h2>
	<dl>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo h($language['Language']['language']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($language['Language']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Sequence'); ?></dt>
		<dd>
			<?php echo h($language['Language']['display_sequence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Flag'); ?></dt>
		<dd>
			<?php echo h($language['Language']['display_flag']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Language'), array('action' => 'edit', $language['Language']['language'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Language'), array('action' => 'delete', $language['Language']['language']), null, __('Are you sure you want to delete # %s?', $language['Language']['language'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('action' => 'add')); ?> </li>
	</ul>
</div>
