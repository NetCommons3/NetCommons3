<?php
/**
 * SingletonHelperViewTest file
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@commonsnet.org>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('Controller', 'Controller');
App::uses('CakeRequest', 'Network');
App::uses('CakeResponse', 'Network');
App::uses('SingletonHelperView', 'View');
App::uses('ControllerTestCase', 'TestSuite');

/**
 * SingletonHelperViewTest
 *
 */
class SingletonHelperViewTest extends CakeTestCase {

/**
 * setUpBeforeClass
 *
 * @return   void
 */
	public static function setUpBeforeClass() {
		// Dummy to include ControllerTestCase using InterceptContentHelper.
		class_exists('ControllerTestCase');
	}

/**
 * setUp
 *
 * @return   void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * For check same object
 *
 * @return   void
 */
	private static $__Html = null;

/**
 * Test load helpers.
 *
 * @return void
 */
	public function testCreateInstance() {
		$Request = new CakeRequest();
		$Response = new CakeResponse();
		$Controller = new Controller($Request, $Response);

		$Controller->helpers = array('Html', 'InterceptContent');
		$View = new SingletonHelperView($Controller);

		$this->assertTrue(isset($View->Html));
		$this->assertTrue(isset($View->InterceptContent));

		self::$__Html = $View->Html;
	}

/**
 * Test use static helpers that except InterceptContentHelper.
 *
 * @return void
 */
	public function testUseStaticHelpers() {
		$Request = new CakeRequest();
		$Response = new CakeResponse();

		$Request->params['requested'] = true;
		$Controller = new Controller($Request, $Response);
		$View = new SingletonHelperView($Controller);

		$this->assertEquals(self::$__Html, $View->Html);
		$this->assertTrue(self::$__Html === $View->Html);
	}

/**
 * Test no use static helpers default View.
 *
 * @return void
 */
	public function testNotUseStaticHelpers() {
		$Request = new CakeRequest();
		$Response = new CakeResponse();

		$Controller = new Controller($Request, $Response);
		$View = new View($Controller);

		$this->assertNotEquals(self::$__Html, $View->Html);
	}

/**
 * Test no use static helpers called with InterceptContentHelper.
 *
 * @return void
 */
	public function testNotUseStaticHelpersWithInterceptContentHelper() {
		$Request = new CakeRequest();
		$Response = new CakeResponse();

		$Request->params['requested'] = true;
		$Controller = new Controller($Request, $Response);
		$Controller->helpers = array('Html', 'InterceptContent');
		$View = new SingletonHelperView($Controller);

		$this->assertNotEquals(self::$__Html, $View->Html);
	}
}
