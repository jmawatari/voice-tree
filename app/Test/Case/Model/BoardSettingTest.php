<?php
App::uses('BoardSetting', 'Model');

/**
 * BoardSetting Test Case
 *
 */
class BoardSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.board_setting',
		'app.client',
		'app.category',
		'app.comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BoardSetting = ClassRegistry::init('BoardSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BoardSetting);

		parent::tearDown();
	}

}
