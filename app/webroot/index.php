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

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
 * These defines should only be edited if you have cake installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */

/**
 * The full path to the directory which holds "app", WITHOUT a trailing DS.
 *
 */
if (!defined('ROOT')) {
	define('ROOT', dirname(dirname(dirname(__FILE__))));
}

/**
 * The actual directory name for the "app".
 *
 */
if (!defined('APP_DIR')) {
	define('APP_DIR', basename(dirname(dirname(__FILE__))));
}

/**
 * The absolute path to the "cake" directory, WITHOUT a trailing DS.
 *
 * Un-comment this line to specify a fixed path to CakePHP.
 * This should point at the directory containing `Cake`.
 *
 * For ease of development CakePHP uses PHP's include_path. If you
 * cannot modify your include_path set this value.
 *
 * Leaving this constant undefined will result in it being defined in Cake/bootstrap.php
 *
 * The following line differs from its sibling
 * /lib/Cake/Console/Templates/skel/webroot/index.php
 */
define('CAKE_CORE_INCLUDE_PATH', ROOT . DS . 'vendors' . DS . 'cakephp' . DS . 'cakephp' . DS . 'lib');

/**
 * Editing below this line should NOT be necessary.
 * Change at your own risk.
 *
 */
if (!defined('WEBROOT_DIR')) {
	define('WEBROOT_DIR', basename(dirname(__FILE__)));
}
if (!defined('WWW_ROOT')) {
	define('WWW_ROOT', dirname(__FILE__) . DS);
}

// for built-in server
if (php_sapi_name() === 'cli-server') {
	if ($_SERVER['REQUEST_URI'] !== '/' && file_exists(WWW_ROOT . $_SERVER['PHP_SELF'])) {
		return false;
	}
	$_SERVER['PHP_SELF'] = '/' . basename(__FILE__);
}

if (!defined('CAKE_CORE_INCLUDE_PATH')) {
	if (function_exists('ini_set')) {
		ini_set('include_path', ROOT . DS . 'lib' . PATH_SEPARATOR . ini_get('include_path'));
	}
	if (!include 'Cake' . DS . 'bootstrap.php') {
		$failed = true;
	}
} else {
	if (!include CAKE_CORE_INCLUDE_PATH . DS . 'Cake' . DS . 'bootstrap.php') {
		$failed = true;
	}
}
if (!empty($failed)) {
	trigger_error("CakePHP core could not be found. Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php. It should point to the directory containing your " . DS . "cake core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
}


if (preg_match('/' . preg_quote('action=common_download_main', '/') . '/', $_SERVER['QUERY_STRING'])) {
	return;
}

CakeLog::config('debug-kit', array(
	'engine' => 'File',
	'types' => array('debug-kit'),
	'file' => 'debug-kit-' . date('Ymd'),
));

CakeLog::config('debug-kit-logs', array(
	'engine' => 'File',
	'types' => array('debug-kit-logs'),
	'file' => 'debug-kit-logs-' . date('YmdH'),
));

App::uses('DebugTimer', 'DebugKit.Lib');
DebugTimer::start($_SERVER['REDIRECT_URL']);
$startTime = microtime(true);

App::uses('Dispatcher', 'Routing');

$Dispatcher = new Dispatcher();
$Dispatcher->dispatch(
	new CakeRequest(),
	new CakeResponse()
);

//以下、デバッグの出力
$endTime = microtime(true);
DebugTimer::stop($_SERVER['REDIRECT_URL']);

if (preg_match('/' . preg_quote('/avatar/', '/') . '/', $_SERVER['QUERY_STRING'])) {
	return;
}

$cacheKey = 'toolbar_cache' . CakeSession::read('Config.userAgent');
$existing = (array)Cache::read($cacheKey, 'debug_kit');
if ($existing[0]) {
	$pluginTimer = [];
	$pluginTotalTime = 0;
	foreach ($existing[0]['timer']['content']['timers'] as $key => $timer) {
		if (substr($key, 0, strlen('plugin_timer')) === 'plugin_timer') {
			if ($timer['time'] === 0) {
				$timer['time'] = $timer['end'] - $timer['start'];
			}
			$pluginTimer[] = $timer;
			$pluginTotalTime += $timer['time'];
		}
	}
	//$pluginTimer[] = [
	//	'start' => $pluginTotalTime,
	//	'message' => 'プラグイン以外(DebugKitも含む)',
	//	'named' => true,
	//	'end' => ($endTime - $startTime),
	//	'time' => ($endTime - $startTime) - $pluginTotalTime
	//];
	$export = var_export([
		'total' => sprintf('%.10f', ($endTime - $startTime)),
		'redirect_url' => $_SERVER['REDIRECT_URL'],
		'plugins' => $pluginTimer,
		'sql_log' => $existing[0]['sql_log'],
		'timer' => $existing[0]['timer'],
	], true);
	$export = preg_replace('/' . preg_quote('\'actions\' => \'', '/') . '[^\']+' . preg_quote('\'', '/') . '/', '\'actions\' => \'\'', $export);
	$export = preg_replace('/' . preg_quote('\'query\' => \'', '/') . '([^\']+)' . preg_quote('\'', '/') . '/', '\'query\' => "$1"', $export);
	$export = preg_replace('/' . preg_quote('&#039;', '/'). '/', '\'', $export);
	$export = preg_replace('/' . preg_quote('&gt;', '/'). '/', '>', $export);
	$export = preg_replace('/' . preg_quote('&lt;', '/'). '/', '<', $export);

	CakeLog::write('debug-kit', var_export([
		'total' => sprintf('%.10f', ($endTime - $startTime)),
		'redirect_url' => $_SERVER['REDIRECT_URL'],
		'plugins' => $pluginTimer,
	], true));
	CakeLog::write('debug-kit-logs', $export);
}
