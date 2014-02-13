<div class="configLangs view">
<h2><?php echo __('Config Lang'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($configLang['Module']['id'], array('controller' => 'modules', 'action' => 'view', $configLang['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Config Name'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['config_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($configLang['ConfigLang']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config Lang'), array('action' => 'edit', $configLang['ConfigLang']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Config Lang'), array('action' => 'delete', $configLang['ConfigLang']['id']), null, __('Are you sure you want to delete # %s?', $configLang['ConfigLang']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Config Langs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config Lang'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
