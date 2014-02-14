<?php
/**
 * ModuleLinkFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for ModuleLinkFixture
 */
class ModuleLinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'モジュールリンクID（ルームごとの配置可能一般モジュールの設定）'),
		'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'マイポータル、マイルームで配置可能なモジュールのみ権限ID毎で設定可能（権限管理）'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index', 'comment' => 'マイポータル、マイルームで配置可能なモジュールの設定、各スペースタイプのデフォルト値のみ0を設定。'),
		'module_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'ml_room_num_idx' => array('column' => array('room_num', 'authority_id', 'space_type'), 'unique' => 0)
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
			'space_type' => 1,
			'authority_id' => 1,
			'room_num' => 1,
			'module_id' => 1,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'space_type' => 2,
			'authority_id' => 2,
			'room_num' => 2,
			'module_id' => 2,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'space_type' => 3,
			'authority_id' => 3,
			'room_num' => 3,
			'module_id' => 3,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'space_type' => 4,
			'authority_id' => 4,
			'room_num' => 4,
			'module_id' => 4,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'space_type' => 5,
			'authority_id' => 5,
			'room_num' => 5,
			'module_id' => 5,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'space_type' => 6,
			'authority_id' => 6,
			'room_num' => 6,
			'module_id' => 6,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'space_type' => 7,
			'authority_id' => 7,
			'room_num' => 7,
			'module_id' => 7,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'space_type' => 8,
			'authority_id' => 8,
			'room_num' => 8,
			'module_id' => 8,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'space_type' => 9,
			'authority_id' => 9,
			'room_num' => 9,
			'module_id' => 9,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'space_type' => 10,
			'authority_id' => 10,
			'room_num' => 10,
			'module_id' => 10,
			'created' => '2014-02-13 08:54:17',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:17',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
