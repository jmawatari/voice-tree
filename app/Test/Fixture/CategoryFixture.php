<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'category';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sort' => array('type' => 'integer', 'null' => true, 'default' => null),
		'default_set_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'category_id', 'unique' => 1)
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
			'category_id' => 1,
			'client_id' => 1,
			'category_name' => 'Lorem ipsum dolor sit amet',
			'sort' => 1,
			'default_set_flg' => 1,
			'status' => 1,
			'created' => 1369099439,
			'modified' => 1369099439
		),
	);

}
