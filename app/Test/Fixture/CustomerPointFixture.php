<?php
/**
 * CustomerPointFixture
 *
 */
class CustomerPointFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'customer_point';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'customer_point_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'customer_point_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'customer_point' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'customer_point_id', 'unique' => 1)
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
			'customer_point_id' => 1,
			'customer_id' => 1,
			'customer_point_type' => 1,
			'customer_point' => 'Lorem ip',
			'status' => 1,
			'created' => 1369100590,
			'modified' => 1369100590
		),
	);

}
