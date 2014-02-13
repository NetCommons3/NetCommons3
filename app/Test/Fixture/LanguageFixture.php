<?php
/**
 * LanguageFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for LanguageFixture
 */
class LanguageFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'language' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
		'display_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '表示名(Japanese,English等。__関数で変換したものを表示させる。)', 'charset' => 'utf8'),
		'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '表示順序。'),
		'display_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index', 'comment' => '公開フラグ
1:公開
0:非公開'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'language', 'unique' => 1),
			'display_flag' => array('column' => array('display_flag', 'display_sequence'), 'unique' => 0)
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
			'language' => 'en_US',
			'display_name' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 1,
			'display_flag' => 1
		),
		array(
			'language' => 'en_GB',
			'display_name' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 2,
			'display_flag' => 2
		),
		array(
			'language' => 'ja_JP',
			'display_name' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 3,
			'display_flag' => 3
		),
	);

}
