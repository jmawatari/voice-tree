<?php
App::uses('AdminMember', 'Model');

/**
 * AdminMember Test Case
 *
 */
class AdminMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.admin_member',
		'app.admin_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdminMember = ClassRegistry::init('AdminMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdminMember);

		parent::tearDown();
	}

/**
 * testBeforeFilter method
 *
 * @return void
 */
	public function testBeforeFilter() {
	}

}
