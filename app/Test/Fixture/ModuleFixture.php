<?php
/**
 * ModuleFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for ModuleFixture
 */
class ModuleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'モジュールID'),
		'dir_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールディレクトリ名', 'charset' => 'utf8'),
		'version' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールVersion', 'charset' => 'utf8'),
		'system_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'システムで使用するかどうか。ONの場合、モジュール管理から削除不可。'),
		'disposition_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'モジュールインストール時に利用可能モジュールにデフォルト設定するかどうか。'),
		'controller_action' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック追加時（管理系モジュールならば、コントロールパネルからアイコンクリック時）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
		'edit_controller_action' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック編集時（ブロック上部アイコンより遷移する画面）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
		'style_controller_action' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 266, 'collate' => 'utf8_general_ci', 'comment' => 'ブロック表示方法変更クリック時（ブロック上部操作->表示方法変更リンクより遷移する画面）、表示コントローラ-アクション名。', 'charset' => 'utf8'),
		'display_sequence' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '表示順序（モジュール追加のリストボックス、会員管理の表示順で使用）。'),
		'module_icon' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールアイコン名（管理系モジュールのみ使用）', 'charset' => 'utf8'),
		'temp_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールデフォルトテンプレート名（未使用）', 'charset' => 'utf8'),
		'content_has_one' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'comment' => 'カレンダー等のブロックに依存しないモジュールは、モジュールの追加の時にcontentsテーブルを
　　　ルーム毎で唯一insertできるようにしておくために用意したカラム（現状、未使用。使用するかどうかは今後、検討）'),
		'copy_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールコピー操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
		'shortcut_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュールショートカット操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
		'move_operation' => array('type' => 'string', 'null' => false, 'default' => 'disabled', 'length' => 16, 'collate' => 'utf8_general_ci', 'comment' => 'モジュール移動操作を可能にするかどうか
enable：使用可能だがデフォルト使用不可(システム管理より変更可)
enabled ：使用可能
disabled：使用不可', 'charset' => 'utf8'),
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
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 1,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 1,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 2,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 2,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 3,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 3,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 4,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 4,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 5,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 5,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 6,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 6,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 7,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 7,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 8,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 8,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 9,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 9,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'dir_name' => 'Lorem ipsum dolor sit amet',
			'version' => 'Lorem ipsum dolor sit amet',
			'system_flag' => 1,
			'disposition_flag' => 1,
			'controller_action' => 'Lorem ipsum dolor sit amet',
			'edit_controller_action' => 'Lorem ipsum dolor sit amet',
			'style_controller_action' => 'Lorem ipsum dolor sit amet',
			'display_sequence' => 10,
			'module_icon' => 'Lorem ipsum dolor sit amet',
			'temp_name' => 'Lorem ipsum dolor sit amet',
			'content_has_one' => 10,
			'copy_operation' => 'Lorem ipsum do',
			'shortcut_operation' => 'Lorem ipsum do',
			'move_operation' => 'Lorem ipsum do',
			'created' => '2014-02-13 08:54:23',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:23',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
