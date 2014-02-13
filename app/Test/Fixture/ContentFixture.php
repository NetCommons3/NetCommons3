<?php
/**
 * ContentFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for ContentFixture
 */
class ContentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'コンテンツID（ブロック内のコンテンツを管理）'),
		'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'コンテンツ名', 'charset' => 'utf8'),
		'shortcut_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'ショートカットタイプ
0：ショートカットではないコンテンツ
1：閲覧のみ許可なショートカット
2：表示中のルーム権限より閲覧・編集権限を付与するショートカット'),
		'root' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ショートカットでない場合、自分自身のContent.id。ショートカットの場合、コンテンツ元のContent.id'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'display_flag' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 2, 'comment' => 'コンテンツを公開するかどうか。
0：非公開
1：公開
2：利用不可'),
		'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済かどうか。'),
		'url' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '外部にコンテンツがあった場合にフルパスで指定（未使用）', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'module_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 1,
			'root' => 1,
			'room_num' => 1,
			'display_flag' => 1,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'module_id' => 2,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 2,
			'root' => 2,
			'room_num' => 2,
			'display_flag' => 2,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'module_id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 3,
			'root' => 3,
			'room_num' => 3,
			'display_flag' => 3,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'module_id' => 4,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 4,
			'root' => 4,
			'room_num' => 4,
			'display_flag' => 4,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'module_id' => 5,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 5,
			'root' => 5,
			'room_num' => 5,
			'display_flag' => 5,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'module_id' => 6,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 6,
			'root' => 6,
			'room_num' => 6,
			'display_flag' => 6,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'module_id' => 7,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 7,
			'root' => 7,
			'room_num' => 7,
			'display_flag' => 7,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'module_id' => 8,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 8,
			'root' => 8,
			'room_num' => 8,
			'display_flag' => 8,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'module_id' => 9,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 9,
			'root' => 9,
			'room_num' => 9,
			'display_flag' => 9,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'module_id' => 10,
			'title' => 'Lorem ipsum dolor sit amet',
			'shortcut_type' => 10,
			'root' => 10,
			'room_num' => 10,
			'display_flag' => 10,
			'is_approved' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:12',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:12',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
