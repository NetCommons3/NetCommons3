<?php
/**
 * UserItemAuthorityLinkFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for UserItemAuthorityLinkFixture
 */
class UserItemAuthorityLinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '会員項目のベース権限毎の編集・閲覧権限ID'),
		'user_item_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'user_authority' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '会員権限（ベース権限）
1:管理者
2:主担
3:モデレーター
4:一般
5:ゲスト'),
		'edit_lower_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '編集権限
（0,1,101,201,301,401のみ）'),
		'show_lower_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '閲覧権限
（0,1,101,201,301,401のみ）'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'uial_item_id_idx' => array('column' => array('user_item_id', 'user_authority'), 'unique' => 0)
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
			'user_item_id' => 1,
			'user_authority' => 1,
			'edit_lower_hierarchy' => 1,
			'show_lower_hierarchy' => 1,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'user_item_id' => 2,
			'user_authority' => 2,
			'edit_lower_hierarchy' => 2,
			'show_lower_hierarchy' => 2,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'user_item_id' => 3,
			'user_authority' => 3,
			'edit_lower_hierarchy' => 3,
			'show_lower_hierarchy' => 3,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'user_item_id' => 4,
			'user_authority' => 4,
			'edit_lower_hierarchy' => 4,
			'show_lower_hierarchy' => 4,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'user_item_id' => 5,
			'user_authority' => 5,
			'edit_lower_hierarchy' => 5,
			'show_lower_hierarchy' => 5,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'user_item_id' => 6,
			'user_authority' => 6,
			'edit_lower_hierarchy' => 6,
			'show_lower_hierarchy' => 6,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'user_item_id' => 7,
			'user_authority' => 7,
			'edit_lower_hierarchy' => 7,
			'show_lower_hierarchy' => 7,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'user_item_id' => 8,
			'user_authority' => 8,
			'edit_lower_hierarchy' => 8,
			'show_lower_hierarchy' => 8,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'user_item_id' => 9,
			'user_authority' => 9,
			'edit_lower_hierarchy' => 9,
			'show_lower_hierarchy' => 9,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'user_item_id' => 10,
			'user_authority' => 10,
			'edit_lower_hierarchy' => 10,
			'show_lower_hierarchy' => 10,
			'created' => '2014-02-13 08:55:03',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:55:03',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
