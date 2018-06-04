<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('NetCommonsAppController', 'NetCommons.Controller');
App::uses('DebugTimer', 'DebugKit.Lib');

/**
 * Application Controller for NetCommons
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class AppController extends NetCommonsAppController {

/**
 * Constructor.
 *
 * @param CakeRequest $request Request object for this controller. Can be null for testing,
 *  but expect that features that use the request parameters will not work.
 * @param CakeResponse $response Response object for this controller.
 */
	public function __construct($request = null, $response = null) {
		//TODO: 測定用に追加。最後、削除する
		if (!empty($request) && empty($request->params['requested'])) {
			DebugTimer::start('plugin_timer_here', $request->here);
		}
		parent::__construct($request, $response);
	}

/**
 * Called after the controller action is run and rendered.
 *
 * @return void
 * @link http://book.cakephp.org/2.0/ja/controllers.html#request-life-cycle-callbacks
 */
	public function afterFilter() {
		parent::afterFilter();
		//TODO: 測定用に追加。最後、削除する
		if (!empty($this->request) && empty($this->request->params['requested'])) {
			DebugTimer::stop('plugin_timer_here');
		}
	}

}
