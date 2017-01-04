<?php
App::uses('Principle', 'Model');

/**
 * Principle Test Case
 */
class PrincipleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.principle',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Principle = ClassRegistry::init('Principle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Principle);

		parent::tearDown();
	}

}
