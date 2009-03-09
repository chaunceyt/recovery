<?php
class Communication extends AppModel {

	var $name = 'Communication';
	var $validate = array(
		'title' => array('notempty'),
		'link' => array('notempty'),
		'type' => array('notempty'),
		'desc' => array('notempty'),
		'tags' => array('notempty')
	);

}
?>