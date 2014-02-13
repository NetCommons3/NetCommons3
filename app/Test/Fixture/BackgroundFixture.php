<?php
/**
 * BackgroundFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for BackgroundFixture
 */
class BackgroundFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'バックグラウンドID
「\\webroot\\img\\backgrounds\\patterns」、「\\webroot\\img\\backgrounds\\images」にあるファイルからページスタイル背景用のマスタを作成。'),
		'group_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '背景画像のグループ番号（Leather（レザー）系）'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Locale/(jang)/LC_MESSAGE/background.poの名称、「\\webroot\\img\\backgrounds\\patterns(images)」下フォルダ名称に対応する。フォルダでなければ、ファイル名のキャメル記法。', 'charset' => 'utf8'),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Plugin/page/Locale/(jang)/LC_MESSAGE/page.poの背景キーワード名称、「\\webroot\\img\\backgrounds\\patterns(images)」下のファイル名の「_」までの先頭文字列（キャメル記法）。', 'charset' => 'utf8'),
		'color' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Plugin/page/Locale/(jang)/LC_MESSAGE/page.poの背景色名称、「\\webroot\\img\\backgrounds\\patterns(images)」下のファイル名の「_」までの第2番目の文字列（キャメル記法）。', 'charset' => 'utf8'),
		'file_path' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '「\\webroot\\img\\backgrounds\\patterns(images)」下のファイルパス。', 'charset' => 'utf8'),
		'file_width' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '背景ファイルの広さ'),
		'file_height' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '背景ファイルの高さ'),
		'file_size' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 20, 'comment' => '背景ファイルのサイズ'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'group_num' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 1,
			'file_height' => 1,
			'file_size' => 1
		),
		array(
			'id' => 2,
			'group_num' => 2,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 2,
			'file_height' => 2,
			'file_size' => 2
		),
		array(
			'id' => 3,
			'group_num' => 3,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 3,
			'file_height' => 3,
			'file_size' => 3
		),
		array(
			'id' => 4,
			'group_num' => 4,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 4,
			'file_height' => 4,
			'file_size' => 4
		),
		array(
			'id' => 5,
			'group_num' => 5,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 5,
			'file_height' => 5,
			'file_size' => 5
		),
		array(
			'id' => 6,
			'group_num' => 6,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 6,
			'file_height' => 6,
			'file_size' => 6
		),
		array(
			'id' => 7,
			'group_num' => 7,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 7,
			'file_height' => 7,
			'file_size' => 7
		),
		array(
			'id' => 8,
			'group_num' => 8,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 8,
			'file_height' => 8,
			'file_size' => 8
		),
		array(
			'id' => 9,
			'group_num' => 9,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 9,
			'file_height' => 9,
			'file_size' => 9
		),
		array(
			'id' => 10,
			'group_num' => 10,
			'type' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'category' => 'Lorem ipsum dolor sit amet',
			'color' => 'Lorem ipsum dolor sit amet',
			'file_path' => 'Lorem ipsum dolor sit amet',
			'file_width' => 10,
			'file_height' => 10,
			'file_size' => 10
		),
	);

}
