<?php
/**
 * CommunityTagFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for CommunityTagFixture
 */
class CommunityTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'community_sum_tag_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'tag_value' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'タグ名称', 'charset' => 'utf8'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
		'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'コミュニティー単位の表示順序(room_num毎の連番)'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'room_num' => array('column' => array('room_num', 'community_sum_tag_id', 'tag_value'), 'unique' => 0)
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
			'room_num' => 1,
			'community_sum_tag_id' => 1,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 1,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'room_num' => 2,
			'community_sum_tag_id' => 2,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 2,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'room_num' => 3,
			'community_sum_tag_id' => 3,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 3,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'room_num' => 4,
			'community_sum_tag_id' => 4,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 4,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'room_num' => 5,
			'community_sum_tag_id' => 5,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 5,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'room_num' => 6,
			'community_sum_tag_id' => 6,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 6,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'room_num' => 7,
			'community_sum_tag_id' => 7,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 7,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'room_num' => 8,
			'community_sum_tag_id' => 8,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 8,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'room_num' => 9,
			'community_sum_tag_id' => 9,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 9,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'room_num' => 10,
			'community_sum_tag_id' => 10,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'Lorem ip',
			'display_sequence' => 10,
			'created' => '2014-02-13 08:54:07',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:07',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
