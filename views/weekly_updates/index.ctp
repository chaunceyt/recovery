<div class="weeklyUpdates index">
<h2><?php __('WeeklyUpdates');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('week_start_date');?></th>
	<th><?php echo $paginator->sort('program_agency_code');?></th>
	<th><?php echo $paginator->sort('program_account_code');?></th>
	<th><?php echo $paginator->sort('program_subacct_code');?></th>
	<th><?php echo $paginator->sort('total_obligations');?></th>
	<th><?php echo $paginator->sort('total_expenditures');?></th>
	<th><?php echo $paginator->sort('major_completed_items');?></th>
	<th><?php echo $paginator->sort('major_planned_actions');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($weeklyUpdates as $weeklyUpdate):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['id']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['week_start_date']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_agency_code']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_account_code']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['program_subacct_code']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['total_obligations']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['total_expenditures']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['major_completed_items']; ?>
		</td>
		<td>
			<?php echo $weeklyUpdate['WeeklyUpdate']['major_planned_actions']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $weeklyUpdate['WeeklyUpdate']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $weeklyUpdate['WeeklyUpdate']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $weeklyUpdate['WeeklyUpdate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $weeklyUpdate['WeeklyUpdate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New WeeklyUpdate', true), array('action'=>'add')); ?></li>
	</ul>
</div>
