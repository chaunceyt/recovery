<div class="communications index">
<h2><?php __('Communications');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('link');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('desc');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('tags');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($communications as $communication):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $communication['Communication']['id']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['title']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['link']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['type']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['desc']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['created']; ?>
		</td>
		<td>
			<?php echo $communication['Communication']['tags']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $communication['Communication']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $communication['Communication']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $communication['Communication']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $communication['Communication']['id'])); ?>
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
		<li><?php echo $html->link(__('New Communication', true), array('action'=>'add')); ?></li>
	</ul>
</div>
