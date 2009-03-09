<div class="blockGrants form">
<?php echo $form->create('BlockGrant');?>
	<fieldset>
 		<legend><?php __('Edit BlockGrant');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('recipient_name');
		echo $form->input('amount');
		echo $form->input('recipient_duns');
		echo $form->input('cfda_number');
		echo $form->input('cfda_title');
		echo $form->input('recipient_address1');
		echo $form->input('recipient_address2');
		echo $form->input('recipient_address3');
		echo $form->input('recipient_city_fips_code');
		echo $form->input('recipient_city_name');
		echo $form->input('recipient_county_code');
		echo $form->input('recipient_county_name');
		echo $form->input('recipient_state_code');
		echo $form->input('recipient_state_name');
		echo $form->input('recipient_zip_code');
		echo $form->input('program_agency_code');
		echo $form->input('program_subacct_code');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BlockGrant.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BlockGrant.id'))); ?></li>
		<li><?php echo $html->link(__('List BlockGrants', true), array('action'=>'index'));?></li>
	</ul>
</div>
