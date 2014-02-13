<?php
/**
 * CommunityFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for CommunityFixture
 */
class CommunityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'photo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティーの写真(選択ファイル名 OR (Upload.id)_library.(extension))', 'charset' => 'utf8'),
		'is_upload' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'アップロードファイルを指定したかどうか。'),
		'publication_range_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '公開範囲
0:非公開（コミュニティー参加者のみが閲覧可能）
1:公開（すべてのログイン会員が閲覧可能）'),
		'participate_force_all_users' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '公開コミュニティーの場合のみ指定。強制的に一般(ゲスト)として参加させるかどうか。チェックがついていた場合、PageUserLinkテーブルに存在していなくてもコミュニティー一覧にも表示させる。'),
		'participate_flag' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '参加方法
0:参加会員のみ
1:招待制（コミュニティーメンバーから招待を受けた会員のみ参加可能）
2:承認制（主担の承認が必要）
3:参加受付制(希望者は誰でも参加可能）'),
		'invite_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '招待を許可する権限
（0,101,201,301のみ）'),
		'is_participate_notice' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '参加者をメール通知するかどうか。'),
		'participate_notice_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '参加者をメール通知する権限。
（0,101,201,301のみ）'),
		'is_resign_notice' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '退会者をメール通知するかどうか。'),
		'resign_notice_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '301', 'comment' => '退会者をメール通知する権限。
（0,101,201,301のみ）'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'room_num' => array('column' => 'room_num', 'unique' => 0)
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
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 1,
			'participate_force_all_users' => 1,
			'participate_flag' => 1,
			'invite_hierarchy' => 1,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 1,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 1,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'room_num' => 2,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 2,
			'participate_force_all_users' => 1,
			'participate_flag' => 2,
			'invite_hierarchy' => 2,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 2,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 2,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'room_num' => 3,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 3,
			'participate_force_all_users' => 1,
			'participate_flag' => 3,
			'invite_hierarchy' => 3,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 3,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 3,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'room_num' => 4,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 4,
			'participate_force_all_users' => 1,
			'participate_flag' => 4,
			'invite_hierarchy' => 4,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 4,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 4,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'room_num' => 5,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 5,
			'participate_force_all_users' => 1,
			'participate_flag' => 5,
			'invite_hierarchy' => 5,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 5,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 5,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'room_num' => 6,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 6,
			'participate_force_all_users' => 1,
			'participate_flag' => 6,
			'invite_hierarchy' => 6,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 6,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 6,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'room_num' => 7,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 7,
			'participate_force_all_users' => 1,
			'participate_flag' => 7,
			'invite_hierarchy' => 7,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 7,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 7,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'room_num' => 8,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 8,
			'participate_force_all_users' => 1,
			'participate_flag' => 8,
			'invite_hierarchy' => 8,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 8,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 8,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'room_num' => 9,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 9,
			'participate_force_all_users' => 1,
			'participate_flag' => 9,
			'invite_hierarchy' => 9,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 9,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 9,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'room_num' => 10,
			'photo' => 'Lorem ipsum dolor sit amet',
			'is_upload' => 1,
			'publication_range_flag' => 10,
			'participate_force_all_users' => 1,
			'participate_flag' => 10,
			'invite_hierarchy' => 10,
			'is_participate_notice' => 1,
			'participate_notice_hierarchy' => 10,
			'is_resign_notice' => 1,
			'resign_notice_hierarchy' => 10,
			'created' => '2014-02-13 08:53:59',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:59',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
