<div class="blockGrants index">
<h2><?php __('BlockGrants');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('recipient_name');?></th>
	<th><?php echo $paginator->sort('amount');?></th>
	<th><?php echo $paginator->sort('recipient_duns');?></th>
	<th><?php echo $paginator->sort('cfda_number');?></th>
	<th><?php echo $paginator->sort('cfda_title');?></th>
	<th><?php echo $paginator->sort('recipient_address1');?></th>
	<th><?php echo $paginator->sort('recipient_address2');?></th>
	<th><?php echo $paginator->sort('recipient_address3');?></th>
	<th><?php echo $paginator->sort('recipient_city_fips_code');?></th>
	<th><?php echo $paginator->sort('recipient_city_name');?></th>
	<th><?php echo $paginator->sort('recipient_county_code');?></th>
	<th><?php echo $paginator->sort('recipient_county_name');?></th>
	<th><?php echo $paginator->sort('recipient_state_code');?></th>
	<th><?php echo $paginator->sort('recipient_state_name');?></th>
	<th><?php echo $paginator->sort('recipient_zip_code');?></th>
	<th><?php echo $paginator->sort('program_agency_code');?></th>
	<th><?php echo $paginator->sort('program_subacct_code');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($blockGrants as $blockGrant):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $blockGrant['BlockGrant']['id']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_name']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['amount']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_duns']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['cfda_number']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['cfda_title']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_address1']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_address2']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_address3']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_city_fips_code']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_city_name']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_county_code']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_county_name']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_state_code']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_state_name']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['recipient_zip_code']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['program_agency_code']; ?>
		</td>
		<td>
			<?php echo $blockGrant['BlockGrant']['program_subacct_code']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $blockGrant['BlockGrant']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $blockGrant['BlockGrant']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $blockGrant['BlockGrant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $blockGrant['BlockGrant']['id'])); ?>
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
		<li><?php echo $html->link(__('New BlockGrant', true), array('action'=>'add')); ?></li>
	</ul>
</div>
