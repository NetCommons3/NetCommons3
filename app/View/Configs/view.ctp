<div class="configs view">
<h2><?php echo __('Config'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($config['Config']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Module'); ?></dt>
		<dd>
			<?php echo $this->Html->link($config['Module']['id'], array('controller' => 'modules', 'action' => 'view', $config['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo h($config['Config']['category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($config['Config']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($config['Config']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($config['Config']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($config['Config']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($config['Config']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Options'); ?></dt>
		<dd>
			<?php echo h($config['Config']['options']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domain'); ?></dt>
		<dd>
			<?php echo h($config['Config']['domain']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attribute'); ?></dt>
		<dd>
			<?php echo h($config['Config']['attribute']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required'); ?></dt>
		<dd>
			<?php echo h($config['Config']['required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minlength'); ?></dt>
		<dd>
			<?php echo h($config['Config']['minlength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maxlength'); ?></dt>
		<dd>
			<?php echo h($config['Config']['maxlength']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regexp'); ?></dt>
		<dd>
			<?php echo h($config['Config']['regexp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang Flag'); ?></dt>
		<dd>
			<?php echo h($config['Config']['lang_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($config['Config']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($config['Config']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($config['Config']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($config['Config']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($config['Config']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($config['Config']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config'), array('action' => 'edit', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Config'), array('action' => 'delete', $config['Config']['id']), null, __('Are you sure you want to delete # %s?', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules'), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module'), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
