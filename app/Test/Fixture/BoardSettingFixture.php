<?php
/**
 * BoardSettingFixture
 *
 */
class BoardSettingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'board_setting';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'board_setting_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'board_disclose_setting_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'comment_approval_setting_flg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'hedder_html_source' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'board_setting_id', 'unique' => 1)
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
			'board_setting_id' => 1,
			'client_id' => 1,
			'board_disclose_setting_flg' => 1,
			'comment_approval_setting_flg' => 1,
			'hedder_html_source' => 'Lorem ipsum dolor sit amet',
			'created' => 1369099249,
			'modified' => 1369099249
		),
	);

}
