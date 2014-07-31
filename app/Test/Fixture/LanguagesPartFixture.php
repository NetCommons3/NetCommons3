<?php
/**
 * LanguagesPartFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for LanguagesPartFixture
 */
class LanguagesPartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'language_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'part_id' => 1,
			'language_id' => 2,
			'name' => 'ルーム管理者',
			'created_user_id' => 1,
			'modified_user_id' => 1,
		),
		array(
			'id' => 2,
			'part_id' => 2,
			'language_id' => 2,
			'name' => '編集長',
			'modified_user_id' => 1,
		),
		array(
			'id' => 3,
			'part_id' => 3,
			'language_id' => 2,
			'name' => '編集者',
			'created_user_id' => 1,
			'modified_user_id' => 1,
		),
		array(
			'id' => 4,
			'part_id' => 4,
			'language_id' => 2,
			'name' => '一般',
			'created_user_id' => 1,
			'modified_user_id' => 1,
		),
		array(
			'id' => 5,
			'part_id' => 5,
			'language_id' => 2,
			'name' => '参観者',
			'created_user_id' => 1,
			'modified_user_id' => 1,
		)
	);

}
