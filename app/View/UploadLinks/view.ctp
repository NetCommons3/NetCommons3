<div class="uploadLinks view">
<h2><?php echo __('Upload Link'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upload'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uploadLink['Upload']['id'], array('controller' => 'uploads', 'action' => 'view', $uploadLink['Upload']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['plugin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uploadLink['Content']['title'], array('controller' => 'contents', 'action' => 'view', $uploadLink['Content']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin Unique'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['plugin_unique']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Name'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field Name'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['field_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Access Hierarchy'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['access_hierarchy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Use'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['is_use']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Download Password'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['download_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Component Action'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['check_component_action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($uploadLink['UploadLink']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload Link'), array('action' => 'edit', $uploadLink['UploadLink']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload Link'), array('action' => 'delete', $uploadLink['UploadLink']['id']), null, __('Are you sure you want to delete # %s?', $uploadLink['UploadLink']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Links'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload Link'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
