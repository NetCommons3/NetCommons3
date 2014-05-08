<?php
/**
 * SiteSetting Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('SiteSetting', 'Model');
App::uses('SiteSettingValue', 'Model');

/**
 * Summary for SiteSetting Test Case
 */
class SiteSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site_setting',
		//'app.created_user',
		//'app.modified_user',
		'app.site_setting_value'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SiteSetting = ClassRegistry::init('SiteSetting');
		$this->SiteSettingValue = ClassRegistry::init('SiteSettingValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SiteSetting);
		unset($this->SiteSettingValue);

		parent::tearDown();
	}
/**
 * getSiteTheme サイト用テーマ名の取得
 * @return void
 */
	public function testGetSiteTheme() {
		//データがある場合
		$ck = $this->SiteSetting->getSiteTheme();
		$this->assertTextEquals("UnitTestTheme", $ck);
		//該当のレコード削除  //データが無い場合を作る
		$ck = $this->SiteSetting->find('first', array(
			'conditions' => array('SiteSetting.name' => 'Theme'),
		));
		$ck1 = $this->SiteSetting->delete($ck['SiteSetting']['id']);
		$this->assertTrue($ck1);
		$ck2 = $this->SiteSettingValue->delete($ck['SiteSettingValue'][0]['id']);
		$this->assertTrue($ck2);
		//問い合わせた結果データは無いのでnullが戻る
		$ck = $this->SiteSetting->getSiteTheme();
		$this->assertEquals(null, $ck);
	}

}
