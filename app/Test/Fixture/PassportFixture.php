<?php
/**
 * PassportFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for PassportFixture
 */
class PassportFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'パスポートID（自動ログインパスポート保存用）'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'passport' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_general_ci', 'comment' => '自動ログイン用パスポート（クッキーに記録）', 'charset' => 'utf8'),
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
			'user_id' => 1,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 2,
			'user_id' => 2,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 3,
			'user_id' => 3,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 4,
			'user_id' => 4,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 5,
			'user_id' => 5,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 6,
			'user_id' => 6,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 7,
			'user_id' => 7,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 8,
			'user_id' => 8,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 9,
			'user_id' => 9,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
		array(
			'id' => 10,
			'user_id' => 10,
			'passport' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:45'
		),
	);

}
