<?php
/**
 * PageStyleFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for PageStyleFixture
 */
class PageStyleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ページスタイル情報ID（ページ設定->ページスタイル）'),
		'scope' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '適用範囲
1：サイト全体
2：スペースタイプ全体
3：ルーム
4：ノード
5：カレントページのみ'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'タイプ毎に設定可能。
1：フォント設定
2：背景
3：表示位置
4：カスタム設定'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '適用言語(ja,en等)', 'charset' => 'utf8'),
		'space_type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'comment' => 'scopeが2以上で設定。'),
		'page_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'scopeが3以上で設定。'),
		'align' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '行揃え
left：左寄せ
center：中央揃え
right：右寄せ', 'charset' => 'utf8'),
		'width' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '最小の広さ(autoならば自動、100%、(%d)px)', 'charset' => 'utf8'),
		'height' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '最小の高さ(autoならば自動、100%、(%d)px)', 'charset' => 'utf8'),
		'original_background_image' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像ファイル名（(upload_id).(extension)）', 'charset' => 'utf8'),
		'original_background_repeat' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像のrepeat(background-repeat)', 'charset' => 'utf8'),
		'original_background_position' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'オリジナル背景画像の位置(background-position)', 'charset' => 'utf8'),
		'original_background_attachment' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '背景画像を固定する(background-attachment)', 'charset' => 'utf8'),
		'file' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 48, 'collate' => 'utf8_general_ci', 'comment' => '選択CSSファイル名', 'charset' => 'utf8'),
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
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
			'align' => 'Lorem ipsum dolor sit amet',
			'width' => 'Lorem ipsum dolor sit amet',
			'height' => 'Lorem ipsum dolor sit amet',
			'original_background_image' => 'Lorem ipsum dolor sit amet',
			'original_background_repeat' => 'Lorem ipsum dolor sit amet',
			'original_background_position' => 'Lorem ipsum dolor sit amet',
			'original_background_attachment' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:32',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:32',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
