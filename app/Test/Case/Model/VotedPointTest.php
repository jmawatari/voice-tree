<?php
App::uses('VotedPoint', 'Model');

/**
 * VotedPoint Test Case
 *
 */
class VotedPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.voted_point',
		'app.customer',
		'app.comment',
		'app.client',
		'app.board_setting',
		'app.category',
		'app.sub_comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VotedPoint = ClassRegistry::init('VotedPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VotedPoint);

		parent::tearDown();
	}

}
