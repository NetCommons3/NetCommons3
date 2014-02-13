<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('handle');
		echo $this->Form->input('authority_id');
		echo $this->Form->input('is_active');
		echo $this->Form->input('permalink');
		echo $this->Form->input('myportal_page');
		echo $this->Form->input('private_page');
		echo $this->Form->input('avatar');
		echo $this->Form->input('activate_key');
		echo $this->Form->input('lang');
		echo $this->Form->input('timezone_offset');
		echo $this->Form->input('email');
		echo $this->Form->input('mobile_email');
		echo $this->Form->input('password_regist');
		echo $this->Form->input('last_login');
		echo $this->Form->input('previous_login');
		echo $this->Form->input('created_user');
		echo $this->Form->input('created_user_name');
		echo $this->Form->input('modified_user');
		echo $this->Form->input('modified_user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authorities'), array('controller' => 'authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Authority'), array('controller' => 'authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Invitations'), array('controller' => 'community_invitations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Invitation'), array('controller' => 'community_invitations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page Sum Views'), array('controller' => 'page_sum_views', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page Sum View'), array('controller' => 'page_sum_views', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Page User Links'), array('controller' => 'page_user_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Page User Link'), array('controller' => 'page_user_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Passports'), array('controller' => 'passports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Passport'), array('controller' => 'passports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads'), array('controller' => 'uploads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload'), array('controller' => 'uploads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Group Links'), array('controller' => 'user_group_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Group Link'), array('controller' => 'user_group_links', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Item Links'), array('controller' => 'user_item_links', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Item Link'), array('controller' => 'user_item_links', 'action' => 'add')); ?> </li>
	</ul>
</div>
