<?php
/**
 * AdminMemberFixture
 *
 */
class AdminMemberFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'admin_member';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'admin_member_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'mail_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'family_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'admin_role_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'admin_member_id', 'unique' => 1)
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
			'admin_member_id' => 1,
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'family_name' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'admin_role_id' => 1,
			'status' => 1,
			'created' => 1369076415,
			'modified' => 1369076415
		),
	);

}
