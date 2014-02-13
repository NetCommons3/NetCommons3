<?php
/**
 * CommunitySumTagFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for CommunitySumTagFixture
 */
class CommunitySumTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tag_value' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_general_ci', 'comment' => 'タグ名称', 'charset' => 'utf8'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
		'used_number' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '該当タグ使用回数。'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tag_value_lang' => array('column' => array('tag_value', 'lang'), 'unique' => 1),
			'tag_value' => array('column' => 'tag_value', 'unique' => 0)
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
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_US',
			'used_number' => 1,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_GB',
			'used_number' => 2,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_FR',
			'used_number' => 3,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_CA',
			'used_number' => 4,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_NZ',
			'used_number' => 5,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_SG',
			'used_number' => 6,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'en_ES',
			'used_number' => 7,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'fr_FR',
			'used_number' => 8,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'ja_JP',
			'used_number' => 9,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'tag_value' => 'Lorem ipsum dolor sit amet',
			'lang' => 'ko_KR',
			'used_number' => 10,
			'created' => '2014-02-13 08:54:05',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:05',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
