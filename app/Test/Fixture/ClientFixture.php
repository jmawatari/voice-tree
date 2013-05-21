<?php
/**
 * ClientFixture
 *
 */
class ClientFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'client';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'client_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'website_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'website_url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'subdomain' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'client_id', 'unique' => 1)
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
			'client_id' => 1,
			'client_name' => 'Lorem ipsum dolor sit amet',
			'client_type' => 1,
			'website_name' => 'Lorem ipsum dolor sit amet',
			'website_url' => 'Lorem ipsum dolor sit amet',
			'subdomain' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => 1369097896,
			'modified' => 1369097896
		),
	);

}
