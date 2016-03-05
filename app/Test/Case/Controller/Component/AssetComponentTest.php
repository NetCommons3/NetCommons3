<?php
/**
 * TestAssetComponentTest
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('Controller', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::uses('AssetComponent', 'Controller/Component');

/**
 * Class TestAssetComponentTestController
 * CompornentをテストするためのController Class
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\Test\Fixture
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
	public $uses = array('SiteManager.SiteSetting');
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
		'plugin.site_manager.site_setting',
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
		$App->theme = 'amelia';
		$this->assertEquals(true, $AssetComponent->isThemeBootstrapMinCss($App));
		$App->theme = 'none';//存在しないテーマ
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
		$this->assertTextEquals('UnitTestTheme', $ck);

		//Tracableビヘイビアの削除
		$App->SiteSetting->Behaviors->unload('NetCommons.Trackable');
		$App->SiteSetting->unbindModel(array('belongsTo' => array('TrackableCreator', 'TrackableUpdater')), false);

		$App->SiteSetting->delete(2);
		$this->assertEquals(array(), $App->SiteSetting->find('first', array('conditions' => array('SiteSetting.id' => 2))));
		//登録されていなかった場合
		$ck = $AssetComponent->getSiteTheme($App);
		$this->assertNull($ck);
	}
}

