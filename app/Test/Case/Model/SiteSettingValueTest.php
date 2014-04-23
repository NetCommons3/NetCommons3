<?php
/**
 * SiteSettingValue Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('SiteSettingValue', 'Model');

/**
 * Summary for SiteSettingValue Test Case
 */
class SiteSettingValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site_setting_value',
		'app.site_setting',
		//'app.created_user',
		//'app.modified_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SiteSettingValue = ClassRegistry::init('SiteSettingValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SiteSettingValue);
		parent::tearDown();
	}

/**
 * testFind
 */
	public function testFind() {
		$ck = $this->SiteSettingValue->find('first', array(
			'conditions' => array("SiteSetting.id" => 2)
		));
		$this->assertTextEquals("UnitTestTheme", $ck["SiteSettingValue"]['value']);
	}

}
