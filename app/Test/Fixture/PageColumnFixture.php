<?php
/**
 * PageColumnFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for PageColumnFixture
 */
class PageColumnFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ページカラム情報ID（ページ設定->ページカラム設定）'),
		'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カテゴリわけしたい場合に使用（未使用）'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
		'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
		'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
		'header_page' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ヘッダーカラムページID'),
		'left_page' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'レフトカラムページID'),
		'right_page' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ライトカラムページID'),
		'footer_page' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'フッターカラムページID'),
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
			'scope' => 1,
			'type' => 1,
			'lang' => 'Lorem ip',
			'space_type' => 1,
			'page_id' => 1,
			'header_page' => 1,
			'left_page' => 1,
			'right_page' => 1,
			'footer_page' => 1,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'scope' => 2,
			'type' => 2,
			'lang' => 'Lorem ip',
			'space_type' => 2,
			'page_id' => 2,
			'header_page' => 2,
			'left_page' => 2,
			'right_page' => 2,
			'footer_page' => 2,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'scope' => 3,
			'type' => 3,
			'lang' => 'Lorem ip',
			'space_type' => 3,
			'page_id' => 3,
			'header_page' => 3,
			'left_page' => 3,
			'right_page' => 3,
			'footer_page' => 3,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'scope' => 4,
			'type' => 4,
			'lang' => 'Lorem ip',
			'space_type' => 4,
			'page_id' => 4,
			'header_page' => 4,
			'left_page' => 4,
			'right_page' => 4,
			'footer_page' => 4,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'scope' => 5,
			'type' => 5,
			'lang' => 'Lorem ip',
			'space_type' => 5,
			'page_id' => 5,
			'header_page' => 5,
			'left_page' => 5,
			'right_page' => 5,
			'footer_page' => 5,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'scope' => 6,
			'type' => 6,
			'lang' => 'Lorem ip',
			'space_type' => 6,
			'page_id' => 6,
			'header_page' => 6,
			'left_page' => 6,
			'right_page' => 6,
			'footer_page' => 6,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'scope' => 7,
			'type' => 7,
			'lang' => 'Lorem ip',
			'space_type' => 7,
			'page_id' => 7,
			'header_page' => 7,
			'left_page' => 7,
			'right_page' => 7,
			'footer_page' => 7,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'scope' => 8,
			'type' => 8,
			'lang' => 'Lorem ip',
			'space_type' => 8,
			'page_id' => 8,
			'header_page' => 8,
			'left_page' => 8,
			'right_page' => 8,
			'footer_page' => 8,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'scope' => 9,
			'type' => 9,
			'lang' => 'Lorem ip',
			'space_type' => 9,
			'page_id' => 9,
			'header_page' => 9,
			'left_page' => 9,
			'right_page' => 9,
			'footer_page' => 9,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'scope' => 10,
			'type' => 10,
			'lang' => 'Lorem ip',
			'space_type' => 10,
			'page_id' => 10,
			'header_page' => 10,
			'left_page' => 10,
			'right_page' => 10,
			'footer_page' => 10,
			'created' => '2014-02-13 08:54:25',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:25',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
