<?php
/**
 * CommunityTag Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('CommunityTag', 'Model');

/**
 * Summary for CommunityTag Test Case
 */
class CommunityTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.community_tag',
		'app.community_sum_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommunityTag = ClassRegistry::init('CommunityTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommunityTag);

		parent::tearDown();
	}

}
