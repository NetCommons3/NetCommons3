<?php
/**
 * AssetComponent Component
 *
 * @author   Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class AssetComponent extends Component {

/**
 * cssの存在チェック
 *
 * @param Controller $controller controller object
 * @return bool
 */
	public function isThemeBootstrapMinCss(Controller $controller) {
		$filePath = App::themePath($controller->theme) . 'webroot/css/bootstrap.min.css';
		if (is_file(realpath($filePath))) {
			return true;
		}
		return false;
	}

/**
 * サイトテーマの取得
 *
 * @param Controller $controller controller object
 * @return mix null or array
 */
	public function getSiteTheme(Controller $controller) {
		$theme = $controller->SiteSetting->getSiteTheme();
		if ($theme) {
			return $theme;
		}
		return null;
	}
}

