<?php
/**
 * SubCommentFixture
 *
 */
class SubCommentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sub_comment';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'sub_comment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'comment_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'comment' => array('type' => 'binary', 'null' => true, 'default' => null),
		'subcomment_anonymous_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'sub_comment_id', 'unique' => 1)
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
			'sub_comment_id' => 1,
			'customer_id' => 1,
			'comment_id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'subcomment_anonymous_flg' => 1,
			'status' => 1,
			'created' => 1369100499,
			'modified' => 1369100499
		),
	);

}
