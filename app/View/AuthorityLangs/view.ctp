<div class="authorityLangs view">
<h2><?php echo __('Authority Lang'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo $this->Html->link($authorityLang['Authority']['id'], array('controller' => 'authorities', 'action' => 'view', $authorityLang['Authority']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($authorityLang['AuthorityLang']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Authority Lang'), array('action' => 'edit', $authorityLang['AuthorityLang']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Authority Lang'), array('action' => 'delete', $authorityLang['AuthorityLang']['id']), null, __('Are you sure you want to delete # %s?', $authorityLang['AuthorityLang']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authority Langs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority Lang'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
