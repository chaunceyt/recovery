<div class="weeklyUpdates form">
<?php echo $form->create('WeeklyUpdate');?>
	<fieldset>
 		<legend><?php __('Edit WeeklyUpdate');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('week_start_date');
		echo $form->input('program_agency_code');
		echo $form->input('program_account_code');
		echo $form->input('program_subacct_code');
		echo $form->input('total_obligations');
		echo $form->input('total_expenditures');
		echo $form->input('major_completed_items');
		echo $form->input('major_planned_actions');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('WeeklyUpdate.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('WeeklyUpdate.id'))); ?></li>
		<li><?php echo $html->link(__('List WeeklyUpdates', true), array('action'=>'index'));?></li>
	</ul>
</div>
