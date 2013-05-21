<?php
App::uses('SubComment', 'Model');

/**
 * SubComment Test Case
 *
 */
class SubCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sub_comment',
		'app.customer',
		'app.comment',
		'app.client',
		'app.board_setting',
		'app.category',
		'app.voted_point'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubComment = ClassRegistry::init('SubComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubComment);

		parent::tearDown();
	}

}
