<?php

// phpDocumentor Settings
// Put author name to netcommons.php or netcommons.yaml
/* $author = 'Noriko Arai, Ryuji Masukawa'; */
$author = 'Jun Nishikawa <topaz2@m0n0m0n0.com>';
$header = <<<EOF
 * @author   $author
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
EOF;

Configure::write('PhpDocumentor.classHeader', $header);

// Load all NetCommons plugins
$plugins = array(
//	'Users',
	'Auth',
);
foreach ($plugins as $plugin) {
	CakePlugin::load($plugin);
}

if (file_exists(APP . 'Config' . DS . 'netcommons.php')) {
	Configure::load('netcommons.php');
}

if (Configure::read('NetCommons.installed')) {
	return;
}

// Load Install plugin
if (Configure::read('Security.salt') === 'f78b12a5c38e9e5c6ae6fbd0ff1f46c77a1e3' ||
	Configure::read('Security.cipherSeed') === '60170779348589376') {
	// Redirect to install plugin
}
