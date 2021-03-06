<?php
App::uses('AdminRole', 'Model');

/**
 * AdminRole Test Case
 *
 */
class AdminRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.admin_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdminRole = ClassRegistry::init('AdminRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdminRole);

		parent::tearDown();
	}

}
