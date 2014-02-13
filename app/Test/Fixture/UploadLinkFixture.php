<?php
/**
 * UploadLinkFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for UploadLinkFixture
 */
class UploadLinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'アップロードリンクID'),
		'upload_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'plugin' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行ったモジュールディレクトリ名', 'charset' => 'utf8'),
		'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'plugin_unique' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'plugin側で一意に識別できる番号'),
		'model_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行った記事等（WYSIWYGならばRevision）のモデル名', 'charset' => 'utf8'),
		'field_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'アップロードを行った記事等（WYSIWYGならばcontent）のフィールド名', 'charset' => 'utf8'),
		'access_hierarchy' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => '表示可能権限
0,101,201,301のみ'),
		'is_use' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4, 'comment' => 'ファイル使用中かどうか。
Revisionから復元処理があるため、一度、記事として登録されたファイルは、登録される。'),
		'download_password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ダウンロード用パスワード', 'charset' => 'utf8'),
		'check_component_action' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '表示チェック用コンポーネント、アクション名をカンマ区切りで設定。記述コンポーネント、アクション名がすべてtrueならば閲覧可能（アクション名のdefaultはcheckメソッド）。
[プラグイン名].[コンポーネント名].[アクション名]（Camel形式）の形式で登録。', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'upload_id' => array('column' => array('upload_id', 'id'), 'unique' => 1)
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
			'upload_id' => 1,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 1,
			'plugin_unique' => 1,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 1,
			'is_use' => 1,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'upload_id' => 2,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 2,
			'plugin_unique' => 2,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 2,
			'is_use' => 2,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'upload_id' => 3,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 3,
			'plugin_unique' => 3,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 3,
			'is_use' => 3,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'upload_id' => 4,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 4,
			'plugin_unique' => 4,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 4,
			'is_use' => 4,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'upload_id' => 5,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 5,
			'plugin_unique' => 5,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 5,
			'is_use' => 5,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'upload_id' => 6,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 6,
			'plugin_unique' => 6,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 6,
			'is_use' => 6,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'upload_id' => 7,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 7,
			'plugin_unique' => 7,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 7,
			'is_use' => 7,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'upload_id' => 8,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 8,
			'plugin_unique' => 8,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 8,
			'is_use' => 8,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'upload_id' => 9,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 9,
			'plugin_unique' => 9,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 9,
			'is_use' => 9,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'upload_id' => 10,
			'plugin' => 'Lorem ipsum dolor sit amet',
			'content_id' => 10,
			'plugin_unique' => 10,
			'model_name' => 'Lorem ipsum dolor sit amet',
			'field_name' => 'Lorem ipsum dolor sit amet',
			'access_hierarchy' => 10,
			'is_use' => 10,
			'download_password' => 'Lorem ipsum dolor sit amet',
			'check_component_action' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:54:53',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:53',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
