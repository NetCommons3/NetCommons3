<?php
/**
 * TestAssetComponentTest
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
App::uses('Controller', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::uses('AssetComponent', 'Controller/Component');
App::uses('SiteSetting', 'NetCommons.Model');

/**
 * Class TestAssetComponentTestController
 * CompornentをテストするためのController Class
 */
class TestAssetComponentTestController extends Controller {
}

/**
 * Class TestAssetComponentTestControllerGetSiteTheme
 * $this->getSiteTheme()をテストするためのclass
 */
class TestAssetComponentTestControllerGetSiteTheme extends Controller {

/**
 * uses model
 *
 * @var array
 */
	public $uses = array("NetCommons.SiteSetting");
}

/**
 * テスト本体
 * Class AssetComponentTest
 */
class AssetComponentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.net_commons.site_setting',
	);

/**
 *  isThemeBootstrapMinCss
 *
 * @return void
 */
	public function testIsThemeBootstrapMinCss() {
		$App = new TestAssetComponentTestController;
		$Collection = new ComponentCollection();
		$AssetComponent = new AssetComponent($Collection);
		$App->theme = "amelia";
		$this->assertEquals(true, $AssetComponent->isThemeBootstrapMinCss($App));
		$App->theme = "none";//存在しないテーマ
		$this->assertEquals(false, $AssetComponent->isThemeBootstrapMinCss($App));
	}

/**
 * テーマを取得し設定する
 *
 * @return void
 */
	public function testGetSiteTheme() {
		$App = new TestAssetComponentTestControllerGetSiteTheme;
		$Collection = new ComponentCollection();
		$AssetComponent = new AssetComponent($Collection);
		//登録されている場合
		$ck = $AssetComponent->getSiteTheme($App);
		$this->assertTextEquals("UnitTestTheme", $ck);
		$App->SiteSetting->delete(2);
		$this->assertEquals(array(), $App->SiteSetting->find('first', array("conditions" => array('SiteSetting.id' => 2))));
		//登録されていなかった場合
		$ck = $AssetComponent->getSiteTheme($App);
		$this->assertNull($ck);
	}
}

