<?php
/**
 * CommunitySumTag Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('CommunitySumTag', 'Model');

/**
 * Summary for CommunitySumTag Test Case
 */
class CommunitySumTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.community_sum_tag',
		'app.community_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommunitySumTag = ClassRegistry::init('CommunitySumTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommunitySumTag);

		parent::tearDown();
	}

}
