<div class="whatsnewStyles view">
<h2><?php echo __('Whatsnew Style'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Block'); ?></dt>
		<dd>
			<?php echo $this->Html->link($whatsnewStyle['Block']['title'], array('controller' => 'blocks', 'action' => 'view', $whatsnewStyle['Block']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Type'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['display_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Period Type'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['display_period_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Days'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['display_days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Number'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['display_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Title'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Description'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Room Name'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_room_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Module Name'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_module_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display User Name'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Display Created'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['is_display_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title Truncate Num'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['title_truncate_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Truncate Num'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['description_truncate_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allow Rss Feed'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['allow_rss_feed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Modules'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['display_modules']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myportal Flag'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['myportal_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myroom Flag'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['myroom_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Select Myportal Users'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['select_myportal_users']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['created_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created User Name'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['created_user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['modified_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Name'); ?></dt>
		<dd>
			<?php echo h($whatsnewStyle['WhatsnewStyle']['modified_user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Whatsnew Style'), array('action' => 'edit', $whatsnewStyle['WhatsnewStyle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Whatsnew Style'), array('action' => 'delete', $whatsnewStyle['WhatsnewStyle']['id']), null, __('Are you sure you want to delete # %s?', $whatsnewStyle['WhatsnewStyle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Whatsnew Styles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whatsnew Style'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blocks'), array('controller' => 'blocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Block'), array('controller' => 'blocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
