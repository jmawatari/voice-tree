<?php
App::uses('ClientMember', 'Model');

/**
 * ClientMember Test Case
 *
 */
class ClientMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_member',
		'app.client',
		'app.board_setting',
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
		$this->ClientMember = ClassRegistry::init('ClientMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientMember);

		parent::tearDown();
	}

}
