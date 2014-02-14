<?php
/**
 * AssetFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for AssetFixture
 */
class AssetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'AssetID(CSS,JSを連結して書き出した一覧)
app\\webroot\\theme\\assets下に圧縮したものと、そうでないもののCSS,JSを保持。'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => 'ファイルパス', 'charset' => 'utf8'),
		'hash_content' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => 'ファイルコンテンツをHash値した値をセット。', 'charset' => 'utf8'),
		'plugin' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'プラグイン名称ORJs,Css,Nc-Locale,(file_name)', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'url_unique' => array('column' => 'url', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'url' => 'Lorem ipsum dolor sit amet1',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 2,
			'url' => 'Lorem ipsum dolor sit amet2',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 3,
			'url' => 'Lorem ipsum dolor sit amet3',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 4,
			'url' => 'Lorem ipsum dolor sit amet4',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 5,
			'url' => 'Lorem ipsum dolor sit amet5',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 6,
			'url' => 'Lorem ipsum dolor sit amet6',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 7,
			'url' => 'Lorem ipsum dolor sit amet7',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 8,
			'url' => 'Lorem ipsum dolor sit amet8',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 9,
			'url' => 'Lorem ipsum dolor sit amet9',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
		array(
			'id' => 10,
			'url' => 'Lorem ipsum dolor sit amet10',
			'hash_content' => 'Lorem ipsum dolor sit amet',
			'plugin' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:37',
			'modified' => '2014-02-13 08:53:37'
		),
	);

}
