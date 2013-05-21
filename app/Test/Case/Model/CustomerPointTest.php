<?php
App::uses('CustomerPoint', 'Model');

/**
 * CustomerPoint Test Case
 *
 */
class CustomerPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_point',
		'app.customer',
		'app.comment',
		'app.client',
		'app.board_setting',
		'app.category',
		'app.voted_point',
		'app.sub_comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerPoint = ClassRegistry::init('CustomerPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerPoint);

		parent::tearDown();
	}

}
