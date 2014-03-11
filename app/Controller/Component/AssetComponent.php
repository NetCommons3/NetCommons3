<?php

App::uses('Component', 'Controller');

class AssetComponent extends Component {

/**
 * cssの存在チェック
 * @param Controller $controller
 * @return bool
 */
	public function isThemeBootstrapMinCss(Controller $controller) {
		$filePath = App::themePath($controller->theme) . 'webroot/css/bootstrap.min.css';
		if (is_file(realpath($filePath))) {
			return true;
		}
		return false;
	}

}