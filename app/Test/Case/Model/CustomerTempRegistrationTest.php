<?php
App::uses('CustomerTempRegistration', 'Model');

/**
 * CustomerTempRegistration Test Case
 *
 */
class CustomerTempRegistrationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_temp_registration'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerTempRegistration = ClassRegistry::init('CustomerTempRegistration');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerTempRegistration);

		parent::tearDown();
	}

}
