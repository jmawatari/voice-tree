<?php
App::uses('ClientMemberTmpRegistration', 'Model');

/**
 * ClientMemberTmpRegistration Test Case
 *
 */
class ClientMemberTmpRegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.client_member_tmp_registration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientMemberTmpRegistration = ClassRegistry::init('ClientMemberTmpRegistration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientMemberTmpRegistration);

		parent::tearDown();
	}

}
