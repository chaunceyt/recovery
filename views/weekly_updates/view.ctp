<div class="weeklyUpdates view">
<h2><?php  __('WeeklyUpdate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Week Start Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['week_start_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Program Agency Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_agency_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Program Account Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_account_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Program Subacct Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_subacct_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Obligations'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['total_obligations']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Expenditures'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['total_expenditures']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Major Completed Items'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['major_completed_items']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Major Planned Actions'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $weeklyUpdate['WeeklyUpdate']['major_planned_actions']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit WeeklyUpdate', true), array('action'=>'edit', $weeklyUpdate['WeeklyUpdate']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete WeeklyUpdate', true), array('action'=>'delete', $weeklyUpdate['WeeklyUpdate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $weeklyUpdate['WeeklyUpdate']['id'])); ?> </li>
		<li><?php echo $html->link(__('List WeeklyUpdates', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New WeeklyUpdate', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
