<?php
/**
 * VotedPointFixture
 *
 */
class VotedPointFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'voted_point';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'voted_point_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'voted_point_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'comment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'sub_comment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'voted_point' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'voted_point_id', 'unique' => 1)
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
			'voted_point_id' => 1,
			'voted_point_type' => 'Lorem ip',
			'customer_id' => 1,
			'comment_id' => 1,
			'sub_comment_id' => 1,
			'voted_point' => 1,
			'created' => 1369118434,
			'modified' => 1369118434
		),
	);

}
