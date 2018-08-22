<?php
/**
 * Index
 *
 * The Front Controller for handling every request
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

$matches = [];
$pattern = '/([^\\/]+)\\/js\\/(.+\\/)?([^\\/\\.]+)?\\.js/';
if (!preg_match($pattern, $_SERVER['REQUEST_URI'], $matches)) {
	return false;
}

header("Content-type: text/javascript; charset=UTF-8");

if (extension_loaded('zlib') && !empty($_SERVER['HTTP_ACCEPT_ENCODING']) &&
		preg_match('/gzip/i', $_SERVER['HTTP_ACCEPT_ENCODING'])) {
	ob_start('ob_gzhandler');
	header('Content-Encoding: gzip');
}

App::uses('Inflector', 'Utility');

$paths = App::path('plugins');
$plugin = Inflector::camelize($matches[1]);
foreach ($paths as $path) {
	$pluginPath = $path . $plugin . DS . WEBROOT_DIR . DS . 'js' . DS;
	if ($matches[2]) {
		$pluginPath .= $matches[2] . DS;
	}
	$pluginPath .= $matches[3] . '.js';

	if (file_exists($pluginPath)) {
		$content = file_get_contents($pluginPath);
		print $content;
		return true;
	}
}

return false;
