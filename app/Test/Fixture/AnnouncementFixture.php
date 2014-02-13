<?php
/**
 * AnnouncementFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for AnnouncementFixture
 */
class AnnouncementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'お知らせID'),
		'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'revision_root' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'revison.revision_rootと同値のrevisionの大本となるrevision.id'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '0：公開中
1：一時保存中
2：一時保存中(新規投稿->一時保存の場合)	　　新規投稿記事メール送信用'),
		'is_approved' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => '承認済かどうか。'),
		'pre_change_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '変更前のコンテンツを表示するかどうか。'),
		'pre_change_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '公開日付（pre_change_flagがONの場合、指定することで、自動的にに最新の記事が公開される。）'),
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
			'content_id' => 1,
			'revision_root' => 1,
			'status' => 1,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'content_id' => 2,
			'revision_root' => 2,
			'status' => 2,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'content_id' => 3,
			'revision_root' => 3,
			'status' => 3,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'content_id' => 4,
			'revision_root' => 4,
			'status' => 4,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'content_id' => 5,
			'revision_root' => 5,
			'status' => 5,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'content_id' => 6,
			'revision_root' => 6,
			'status' => 6,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'content_id' => 7,
			'revision_root' => 7,
			'status' => 7,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'content_id' => 8,
			'revision_root' => 8,
			'status' => 8,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'content_id' => 9,
			'revision_root' => 9,
			'status' => 9,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'content_id' => 10,
			'revision_root' => 10,
			'status' => 10,
			'is_approved' => 1,
			'pre_change_flag' => 1,
			'pre_change_date' => '2014-02-13 08:53:33',
			'created' => '2014-02-13 08:53:33',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:33',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
