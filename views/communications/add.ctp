<div class="communications form">
<?php echo $form->create('Communication');?>
	<fieldset>
 		<legend><?php __('Add Communication');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('link');
		echo $form->input('type');
		echo $form->input('desc');
		echo $form->input('tags');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Communications', true), array('action'=>'index'));?></li>
	</ul>
</div>
