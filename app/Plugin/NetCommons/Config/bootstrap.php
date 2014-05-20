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

// Load all plugins
$plugins = App::objects('plugins');
foreach ($plugins as $plugin) {
	$options = array();
	is_readable(ROOT . DS . 'plugins' . DS . $plugin . DS . 'Config' . DS . 'bootstrap.php') &&
		$options['bootstrap'] = true;
	is_readable(ROOT . DS . 'plugins' . DS . $plugin . DS . 'Config' . DS . 'routes.php') &&
		$options['routes'] = true;
	CakePlugin::load($plugin, $options);
}

// Load application configurations
App::import('vendor', 'mustangostang/spyc/spyc');
$conf = array();
$files = array('application.yml', 'application.local.yml');
foreach ($files as $file) {
	if (file_exists(APP . 'Config' . DS . $file)) {
		$conf = array_merge($conf, Spyc::YAMLLoad(APP . 'Config' . DS . $file));
		Configure::write($conf);
	}
}

if (Configure::read('NetCommons.installed')) {
	return;
}

// Load Install plugin
if (Configure::read('Security.salt') === 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi' ||
	Configure::read('Security.cipherSeed') === '76859309657453542496749683645') {
	// Redirect to install plugin
}
