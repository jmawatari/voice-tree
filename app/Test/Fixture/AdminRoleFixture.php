<?php
/**
 * AdminRoleFixture
 *
 */
class AdminRoleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'admin_role';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'admin_role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'admin_role_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'admin_role_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'admin_role_id', 'unique' => 1)
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
			'admin_role_id' => 1,
			'admin_role_code' => 'Lorem ipsum dolor ',
			'admin_role_name' => 'Lorem ipsum dolor sit amet',
			'created' => 1368855578,
			'modified' => 1368855578
		),
	);

}
