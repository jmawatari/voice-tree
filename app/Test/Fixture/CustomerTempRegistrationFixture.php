<?php
/**
 * CustomerTempRegistrationFixture
 *
 */
class CustomerTempRegistrationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'customer_temp_registration';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_temp_registration_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'customer_registration_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'tmp_key' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mail_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'expire_datetime' => array('type' => 'time', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'customer_temp_registration_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'customer_temp_registration_id' => 1,
			'customer_registration_type' => 1,
			'tmp_key' => 'Lorem ipsum dolor sit amet',
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'customer_id' => 1,
			'expire_datetime' => '08:26:23',
			'status' => 1,
			'created' => 1369117583,
			'modified' => 1369117583
		),
	);

}
