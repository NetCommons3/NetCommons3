<?php
/**
 * Singleton helper view
 *
 * @copyright Copyright 2014, NetCommons Project
 * @author Kohei Teraguchi <kteraguchi@commonsnet.org>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('View', 'View');

/**
 * A view class that is used for singleton helper.
 *
 * SingletonHelperView uses helper as singleton, if controller is called requestAction() method.
 * Expect InterceptContentHelper to test.
 *
 * @author Kohei Teraguchi <kteraguchi@commonsnet.org>
 * @package NetCommons\Pages\Controller
 */
class SingletonHelperView extends View {

/**
 * Constructor
 *
 * @param Controller $controller A controller object
 */
	public function __construct(Controller $controller = null) {
		static $helpers = null;

		parent::__construct($controller);

		if (!isset($helpers)) {
			$helpers = clone $this->Helpers;
			$helpers->unload('InterceptContent');
		}

		if (!empty($this->request->params['requested']) &&
				!isset($this->InterceptContent)) {
			$this->Helpers = $helpers;
		}
	}

}
