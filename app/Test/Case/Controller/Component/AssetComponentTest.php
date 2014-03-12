<?php
App::uses('Controller', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::uses('AssetComponent', 'Controller/Component');

/**
 * Class TestAssetComponentTestController
 * CompornentをテストするためのController Class
 */
class TestAssetComponentTestController extends Controller {
}

class AssetComponentTest extends CakeTestCase {

	public $Controller = null;

/**
 * Fixtures
 * @var array
 */
	public $fixtures = array(
		'app.session'
	);

	public function setUp() {
		parent::setUp();
	}

	public function tearDown() {
		parent::tearDown();
	}

	public function testIsThemeBootstrapMinCss() {
		$App = new TestAssetComponentTestController;
		$Collection = new ComponentCollection();
		$AssetComponent = new AssetComponent( $Collection );
		$App->theme = "amelia";
		$this->assertEquals(true, $AssetComponent->isThemeBootstrapMinCss( $App ));
		$App->theme = "none";//存在しないテーマ
		$this->assertEquals(false, $AssetComponent->isThemeBootstrapMinCss($App));
	}
}