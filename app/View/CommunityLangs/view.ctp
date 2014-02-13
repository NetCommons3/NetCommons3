<div class="communityLangs view">
<h2><?php echo __('Community Lang'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Room Num'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['room_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Community Name'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['community_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Root'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['revision_root']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($communityLang['CommunityLang']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Community Lang'), array('action' => 'edit', $communityLang['CommunityLang']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Community Lang'), array('action' => 'delete', $communityLang['CommunityLang']['id']), null, __('Are you sure you want to delete # %s?', $communityLang['CommunityLang']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Community Langs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Community Lang'), array('action' => 'add')); ?> </li>
	</ul>
</div>
