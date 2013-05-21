<?php
App::uses('AdminMemberTmpRegistration', 'Model');

/**
 * AdminMemberTmpRegistration Test Case
 *
 */
class AdminMemberTmpRegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.admin_member_tmp_registration',
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
		$this->AdminMemberTmpRegistration = ClassRegistry::init('AdminMemberTmpRegistration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdminMemberTmpRegistration);

		parent::tearDown();
	}

}
