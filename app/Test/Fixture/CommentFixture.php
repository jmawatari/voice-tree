<?php
/**
 * CommentFixture
 *
 */
class CommentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'comment';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'comment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'comment_disclose_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'comment_approval_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'comment_anonymous_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'comment' => array('type' => 'binary', 'null' => true, 'default' => null),
		'handling_status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'comment_id', 'unique' => 1)
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
			'comment_id' => 1,
			'customer_id' => 1,
			'comment_type' => 1,
			'client_id' => 1,
			'category_id' => 1,
			'comment_disclose_flg' => 1,
			'comment_approval_flg' => 1,
			'comment_anonymous_flg' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'handling_status' => 1,
			'status' => 1,
			'created' => 1369100097,
			'modified' => 1369100097
		),
	);

}
