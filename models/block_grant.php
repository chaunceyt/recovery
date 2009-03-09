<?php
class BlockGrant extends AppModel {

	var $name = 'BlockGrant';
	var $validate = array(
		'id' => array('notempty'),
		'recipient_name' => array('notempty'),
		'amount' => array('notempty'),
		'recipient_duns' => array('notempty'),
		'cfda_number' => array('notempty'),
		'cfda_title' => array('notempty'),
		'recipient_address1' => array('notempty'),
		'recipient_address2' => array('notempty'),
		'recipient_address3' => array('notempty'),
		'recipient_city_fips_code' => array('notempty'),
		'recipient_city_name' => array('notempty'),
		'recipient_county_code' => array('notempty'),
		'recipient_county_name' => array('notempty'),
		'recipient_state_code' => array('notempty'),
		'recipient_state_name' => array('notempty'),
		'recipient_zip_code' => array('notempty'),
		'program_agency_code' => array('notempty'),
		'program_subacct_code' => array('notempty')
	);

}
?>