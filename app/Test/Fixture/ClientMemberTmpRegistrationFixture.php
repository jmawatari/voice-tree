<?php
/**
 * ClientMemberTmpRegistrationFixture
 *
 */
class ClientMemberTmpRegistrationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'client_member_tmp_registration';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'client_member_tmp_registration_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_member_registration_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'tmp_key' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mail_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'expire_datetime' => array('type' => 'time', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'client_member_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'client_member_tmp_registration_id', 'unique' => 1)
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
			'client_member_tmp_registration_id' => 1,
			'client_member_registration_type' => 1,
			'tmp_key' => 'Lorem ipsum dolor sit amet',
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'expire_datetime' => '08:35:08',
			'status' => 1,
			'created' => 1369118108,
			'modified' => 1369118108,
			'client_member_id' => 1
		),
	);

}
