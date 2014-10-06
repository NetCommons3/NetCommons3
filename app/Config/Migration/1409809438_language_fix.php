<?php
class LanguageFix extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Records keyed by model name.
 *
 * @var array $records
 */
	public $records = array(
				'Page' => array(
					array(
						'id' => '1',
						'room_id' => '1',
						'parent_id' => null,
						'lft' => '1',
						'rght' => '2',
						'permalink' => '',
						'slug' => null,
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
				),

				'Container' => array(
					array(
						'id' => '1',
						'type' => '1',
					),
					array(
						'id' => '2',
						'type' => '2',
					),
					array (
						'id' => '3',
						'type' => '3',
					),
					array(
						'id' => '4',
						'type' => '4',
					),
					array(
						'id' => '5',
						'type' => '5',
					),
				),

				'ContainersPage' => array(
					array(
						'id' => '1',
						'page_id' => '1',
						'container_id' => '1',
						'is_published' => true,
					),
					array(
						'id' => '2',
						'page_id' => '1',
						'container_id' => '2',
						'is_published' => true,
					),
					array(
						'id' => '3',
						'page_id' => '1',
						'container_id' => '3',
						'is_published' => true,
					),
					array(
						'id' => '4',
						'page_id' => '1',
						'container_id' => '4',
						'is_published' => true,
					),
					array(
						'id' => '5',
						'page_id' => '1',
						'container_id' => '5',
						'is_published' => true,
					),
				),

				'Box' => array(
					array(
						'id' => '1',
						'container_id' => '1',
						'type' => '1',
						'space_id' => '1',
						'room_id' => null,
						'page_id' => null,
						'weight' => '1',
					),
					array(
						'id' => '2',
						'container_id' => '2',
						'type' => '1',
						'space_id' => '1',
						'room_id' => null,
						'page_id' => null,
						'weight' => '1',
					),
					array(
						'id' => '3',
						'container_id' => '3',
						'type' => '4',
						'space_id' => null,
						'room_id' => 1,
						'page_id' => '1',
						'weight' => '1',
					),
					array(
						'id' => '4',
						'container_id' => '4',
						'type' => '1',
						'space_id' => 1,
						'room_id' => null,
						'page_id' => null,
						'weight' => '1',
					),
					array(
						'id' => '5',
						'container_id' => '5',
						'type' => '1',
						'space_id' => 1,
						'room_id' => null,
						'page_id' => null,
						'weight' => '1',
					),
				),

				'BoxesPage' => array(
					array(
						'id' => '1',
						'page_id' => '1',
						'box_id' => '1',
						'is_published' => true,
					),
					array(
						'id' => '2',
						'page_id' => '1',
						'box_id' => '2',
						'is_published' => true,
					),
					array(
						'id' => '3',
						'page_id' => '1',
						'box_id' => '3',
						'is_published' => true,
					),
					array(
						'id' => '4',
						'page_id' => '1',
						'box_id' => '4',
						'is_published' => true,
					),
					array(
						'id' => '5',
						'page_id' => '1',
						'box_id' => '5',
						'is_published' => true,
					),
				),

				'Frame' => array(
					array(
						'id' => '1',
						'room_id' => '1',
						'box_id' => '1',
						'plugin_id' => '1',
						'block_id' => '1',
						'weight' => '1',
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
					array(
						'id' => '2',
						'room_id' => '1',
						'box_id' => '2',
						'plugin_id' => '2',
						'block_id' => '2',
						'weight' => '1',
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
					array(
						'id' => '3',
						'room_id' => '1',
						'box_id' => '3',
						'plugin_id' => '1',
						'block_id' => '3',
						'weight' => '1',
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
					array(
						'id' => '4',
						'room_id' => '1',
						'box_id' => '4',
						'plugin_id' => '1',
						'block_id' => '4',
						'weight' => '1',
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
					array(
						'id' => '5',
						'room_id' => '1',
						'box_id' => '5',
						'plugin_id' => '1',
						'block_id' => '5',
						'weight' => '1',
						'is_published' => true,
						'from' => null,
						'to' => null,
					),
				),

				'Block' => array(
					array(
						'id' => '1',
						'room_id' => '1',
					),
					array(
						'id' => '2',
						'room_id' => '1',
					),
					array(
						'id' => '3',
						'room_id' => '1',
					),
					array(
						'id' => '4',
						'room_id' => '1',
					),
					array(
						'id' => '5',
						'room_id' => '1',
					),
				),

				'Language' => array(
					array(
						'id' => '1',
						'code' => 'en',
						'weight' => '1',
						'is_active' => true,
					),
					array(
						'id' => '2',
						'code' => 'jp',
						'weight' => '2',
						'is_active' => true,
					),
					array(
						'id' => '3',
						'code' => 'zh',
						'weight' => '3',
						'is_active' => true,
					),
				),

				'LanguagesPage' => array(
					array(
						'id' => '1',
						'page_id' => '1',
						'language_id' => '1',
						'name' => 'TestPage001',
					),
					array(
						'id' => '2',
						'page_id' => '1',
						'language_id' => '2',
						'name' => 'テストページ001',
					),
				),

				'Plugin' => array(
					array(
						'id' => '1',
						'folder' => 'announcements',
						'type' => '1',
						'version' => '3.0.0'
					),
					array(
						'id' => '2',
						'folder' => 'menus',
						'type' => '1',
						'version' => '3.0.0'
					),
					array(
						'id' => '3',
						'folder' => 'plugin_manager',
						'type' => '2',
						'version' => '3.0.0'
					),
				),


				'Part' => array(
					array(
						'id' => '1',
						'type' => '2',
					),
					array(
						'id' => '2',
						'type' => '2',
					),
					array(
						'id' => '3',
						'type' => '2',
					),
					array(
						'id' => '4',
						'type' => '2',
					),
					array(
						'id' => '5',
						'type' => '2',
					),
				),

				'PartsRoomsUser' => array(
					array(
						'id' => '1',
						'room_id' => '1',
						'user_id' => '1',
						'part_id' => '1',
					),
				),

				'RoomPart' => array(
					array(
						'id' => '1',
						'part_id' => '1',
						'weight' => '1',
						'hierarchy' => '2147483647',
						'read_page' => 1,
						'edit_page' => 1,
						'create_page' => 1,
						'publish_page' => 1,
						'read_block' => 1,
						'edit_block' => 1,
						'create_block' => 1,
						'publish_block' => 1,
						'read_content' => 1,
						'edit_content' => 1,
						'create_content' => 1,
						'publish_content' => 1,
					),
					array(
						'id' => '2',
						'part_id' => '2',
						'weight' => '2',
						'hierarchy' => '8000',
						'read_page' => 1,
						'edit_page' => 1,
						'create_page' => 1,
						'publish_page' => 2,
						'read_block' => 1,
						'edit_block' => 1,
						'create_block' => 1,
						'publish_block' => 2,
						'read_content' => 1,
						'edit_content' => 2,
						'create_content' => 1,
						'publish_content' => 2,
					),
					array(
						'id' => '3',
						'part_id' => '3',
						'weight' => '3',
						'hierarchy' => '7000',
						'read_page' => 1,
						'edit_page' => 0,
						'create_page' => 0,
						'publish_page' => 0,
						'read_block' => 1,
						'edit_block' => 0,
						'create_block' => 0,
						'publish_block' => 0,
						'read_content' => 1,
						'edit_content' => 2,
						'create_content' => 1,
						'publish_content' => 2,
					),
					array(
						'id' => '4',
						'part_id' => '4',
						'weight' => '4',
						'hierarchy' => '6000',
						'read_page' => 1,
						'edit_page' => 0,
						'create_page' => 0,
						'publish_page' => 0,
						'read_block' => 1,
						'edit_block' => 0,
						'create_block' => 0,
						'publish_block' => 0,
						'read_content' => 1,
						'edit_content' => 0,
						'create_content' => 1,
						'publish_content' => 2,
					),
					array(
						'id' => '5',
						'part_id' => '5',
						'weight' => '5',
						'hierarchy' => '1000',
						'read_page' => 1,
						'edit_page' => 0,
						'create_page' => 0,
						'publish_page' => 0,
						'read_block' => 1,
						'edit_block' => 0,
						'create_block' => 0,
						'publish_block' => 0,
						'read_content' => 1,
						'edit_content' => 0,
						'create_content' => 0,
						'publish_content' => 0,
					),
				),
				'LanguagesRoles' => array(
					array(
					'id' => 1,
					'role_id' => 1,
					'language_id' => 2,
					'name' => 'ルーム管理者',
					'created_user' => 1,
					'created' => false,
					'modified_user' => 1,
					'modified' => false,
					),
					array(
						'id' => 2,
						'role_id' => 2,
						'language_id' => 2,
						'name' => '編集長',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
					array(
						'id' => 3,
						'role_id' => 3,
						'language_id' => 2,
						'name' => '編集者',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
					array(
						'id' => 4,
						'role_id' => 4,
						'language_id' => 2,
						'name' => '一般',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
					array(
						'id' => 5,
						'role_id' => 5,
						'language_id' => 2,
						'name' => '参観者',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					)
				),

				'Role' => array(
					array(
						'id' => '1',
					),
				),

				'LanguagesPlugin' => array(
					array(
						'id' => '1',
						'plugin_id' => 1,
						'language_id' => 2,
						'name' => 'お知らせ',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
					array(
						'id' => '2',
						'plugin_id' => 2,
						'language_id' => 2,
						'name' => 'メニュー',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
					array(
						'id' => '3',
						'plugin_id' => 3,
						'language_id' => 2,
						'name' => 'プラグイン管理',
						'created_user' => 1,
						'created' => false,
						'modified_user' => 1,
						'modified' => false,
					),
				),

				'PluginsRole' => array(
					array(
						'id' => '1',
						'role_id' => '1',
						'plugin_id' => '1'
					),
					array(
						'id' => '2',
						'role_id' => '1',
						'plugin_id' => '2'
					),
					array(
						'id' => '3',
						'role_id' => '1',
						'plugin_id' => '3'
					),
				),

				'PluginsRoom' => array(
					array(
						'id' => '1',
						'room_id' => '1',
						'plugin_id' => '1'
					),
					array(
						'id' => '2',
						'room_id' => '1',
						'plugin_id' => '2'
					),
				),

				'Room' => array(
					array(
						'id' => '1',
						'space_id' => '1'
					),
				),
			);

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'announcement_block_message' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'language_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2),
					'subject' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'create_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'announcement_block_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'part_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_content' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'edit_content' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'create_content' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'publish_content' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'is_send' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'create_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'announcement_block_setting' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'is_send_request' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
					'is_send_update' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
					'create_user' => array('type' => 'integer', 'null' => false, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'announcement_data' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'announcement_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'is_original' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
					'translation_engine' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'create_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'announcements' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
					'create_user' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'ãŠçŸ¥ã‚‰ã›'),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the block.', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'boxes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'container_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Type of the box.\\n1:each site, 2:each space, 3:each room, 4:each page'),
					'space_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'room_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'boxes_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'box_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ä¸€èˆ¬ä»¥ä¸‹ã®ãƒ‘ãƒ¼ãƒˆãŒé–²è¦§å¯èƒ½ã‹ã©ã†ã‹ã€‚\\n\\nãƒ«ãƒ¼ãƒ é…ä¸‹ãªã‚‰ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶(room_parts.edit_page, room_parts.create_page åŒæ–¹ãŒ true ã®ãƒ¦ãƒ¼ã‚¶)ã¯ã“ã®å€¤ã«é–¢ã‚ã‚‰ãšé–²è¦§ã§ãã‚‹ã€‚\\ne.g.) ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶: ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ç·¨é›†é•·'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'containers' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Type of the container.\\n1:Header, 2:Major, 3:Main, 4:Minor, 5:Footer'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'containers_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'container_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ä¸€èˆ¬ä»¥ä¸‹ã®ãƒ‘ãƒ¼ãƒˆãŒé–²è¦§å¯èƒ½ã‹ã©ã†ã‹ã€‚\\n\\nãƒ«ãƒ¼ãƒ é…ä¸‹ãªã‚‰ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶(room_parts.edit_page, room_parts.create_page åŒæ–¹ãŒ true ã®ãƒ¦ãƒ¼ã‚¶)ã¯ã“ã®å€¤ã«é–¢ã‚ã‚‰ãšé–²è¦§ã§ãã‚‹ã€‚\\ne.g.) ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶: ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ç·¨é›†é•·'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'frames' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'box_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'plugin_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the frame.', 'charset' => 'utf8'),
					'block_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'ä¸€èˆ¬ä»¥ä¸‹ã®ãƒ‘ãƒ¼ãƒˆãŒé–²è¦§å¯èƒ½ã‹ã©ã†ã‹ã€‚\\n\\nãƒ«ãƒ¼ãƒ é…ä¸‹ãªã‚‰ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶(room_parts.edit_page, room_parts.create_page åŒæ–¹ãŒ true ã®ãƒ¦ãƒ¼ã‚¶)ã¯ã“ã®å€¤ã«é–¢ã‚ã‚‰ãšé–²è¦§ã§ãã‚‹ã€‚\\ne.g.) ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ã¾ãŸã¯ãã‚Œã«æº–ãšã‚‹ãƒ¦ãƒ¼ã‚¶: ãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã€ç·¨é›†é•·'),
					'from' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display frame from.'),
					'to' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display frame to.'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'group_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'part_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_participant' => array('type' => 'integer', 'null' => true, 'default' => null),
					'create_participant' => array('type' => 'integer', 'null' => true, 'default' => null),
					'delete_participant' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_group' => array('type' => 'integer', 'null' => true, 'default' => null),
					'create_group' => array('type' => 'integer', 'null' => true, 'default' => null),
					'edit_group' => array('type' => 'integer', 'null' => true, 'default' => null),
					'delete_group' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
					'has_room' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Group has room or not.'),
					'need_approval' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'can_read_by_self' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'è‡ªåˆ†è‡ªèº«ãŒã‚°ãƒ«ãƒ¼ãƒ—ã®æ§‹æˆå“¡ã§ã‚ã‚‹ã‹ã©ã†ã‹ã€è‡ªåˆ†è‡ªèº«ãŒé–²è¦§ã—å¾—ã‚‹ã‹å¦ã‹ã€‚\\ne.g.) å«Œã„ãªäººã‚°ãƒ«ãƒ¼ãƒ—ã‚’ä½œã£ãŸå½“äººã¯é–²è¦§ã§ãã¦ã‚‚ã€å«Œã„ãªã‚°ãƒ«ãƒ¼ãƒ—ã«ç™»éŒ²ã•ã‚ŒãŸã ã‘ã®äººã¯é–²è¦§ä¸å¯ãªã©ã€‚'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_parts_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary'),
					'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'),
					'is_active' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Visible from user or not.\\nOnly user w/ administrator role can edit this flag whether it\\\'s true or false.'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'page_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Datetime display page from.'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
					'permalink' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'from' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display page from.'),
					'to' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display page to.'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Type of the part.\\n1: Room part, 2: Group part'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'parts_rooms_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'plugins' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key to identify plugin.\\nMust be equivalent to plugin name used in router url.\\ne.g.) user_manager, auth, pages', 'charset' => 'utf8'),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Human friendly name for the plugin.\\ne.g.) User Manager, Auth, Pages', 'charset' => 'utf8'),
					'namespace' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Unique namespace for package management system.\\ne.g.) packagist', 'charset' => 'utf8'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '1:for frame,2:for control panel'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'plugins_roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'plugin_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the role.\\ne.g.) Administrator, User Manager, Chief, User\\n', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles_user_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'can_read' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'can_edit' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'room_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'part_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null),
					'hierarchy' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_page' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '0: Unreadable, 1: Readable, 2: Variable'),
					'edit_page' => array('type' => 'integer', 'null' => true, 'default' => null),
					'create_page' => array('type' => 'integer', 'null' => true, 'default' => null),
					'publish_page' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_block' => array('type' => 'integer', 'null' => true, 'default' => null),
					'edit_block' => array('type' => 'integer', 'null' => true, 'default' => null),
					'create_block' => array('type' => 'integer', 'null' => true, 'default' => null),
					'publish_block' => array('type' => 'integer', 'null' => true, 'default' => null),
					'read_content' => array('type' => 'integer', 'null' => true, 'default' => null),
					'edit_content' => array('type' => 'integer', 'null' => true, 'default' => null),
					'create_content' => array('type' => 'integer', 'null' => true, 'default' => null),
					'publish_content' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rooms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'space_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'top_page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'need_approval' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'è‡ªåˆ†ãŒãƒ«ãƒ¼ãƒ ç®¡ç†è€…ã¨ã—ã¦ãƒ‘ãƒ¼ãƒˆã‚’å‰²ã‚Šå½“ã¦ã‚‰ã‚ŒãŸæ™‚ã€è‡ªåˆ†ã‚ˆã‚Šä¸‹ä½ã®ãƒ‘ãƒ¼ãƒˆã«å…¬é–‹æ¨©é™ã‚’å‰²ã‚Šå½“ã¦ã‚‹ã“ã¨ãŒã§ãã‚‹ã‹å¦ã‹ã€‚'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'site_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key of the record.\\ne.g.) theme_name, site_name', 'charset' => 'utf8'),
					'value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Value of the record.\\ne.g.) default, My Homepage', 'charset' => 'utf8'),
					'label' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Human friendly label for the record.\\ne.g.) Theme, Site Name', 'charset' => 'utf8'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'spaces' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
					'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Type of the space.\\n1: Whole site, 2: Public space, 3: Private space, 4: Room space'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'data_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'comment' => 'Data type of user_attribute.\\n1: input text, 2: radio, 3: checkbox, 4: select, 5: textarea, 6: email, 7: mobile email, 8: link, 9: html, 10: file, 11: image file, 12: auto increment, 13: date, 14: created datetime,  15: modified datetime'),
					'plugin_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'comment' => 'Plugin type of this record belongs to.\\n1: All, 2: Users, 3: FlexibleDatabases / FlexibleForms'),
					'label' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Label of the user_attribute.\\ne.g.) Nickname, Age, Email Address', 'charset' => 'utf8'),
					'required' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'can_read_self' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'can_edit_self' => array('type' => 'boolean', 'null' => true, 'default' => null),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'è¡¨ç¤ºé †'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_attributes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key to identify record meaning.\\ne.g.) nickname, age, ', 'charset' => 'utf8'),
					'value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_select_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6),
					'user_attribute_id' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_select_attributes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'user_select_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'value' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Value of the record.\\ne.g.) 0, 1, 5, 10'),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
					'username' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => null),
					'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'announcement_block_message', 'announcement_block_parts', 'announcement_block_setting', 'announcement_data', 'announcements', 'blocks', 'boxes', 'boxes_pages', 'containers', 'containers_pages', 'frames', 'group_parts', 'groups', 'groups_languages', 'groups_parts_users', 'groups_users', 'languages', 'languages_pages', 'pages', 'parts', 'parts_rooms_users', 'plugins', 'plugins_roles', 'roles', 'roles_user_attributes', 'room_parts', 'rooms', 'site_settings', 'spaces', 'user_attributes', 'user_attributes_users', 'user_select_attributes', 'user_select_attributes_users', 'users'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction up or down direction of migration process
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction up or down direction of migration process
 * @return bool Should process continue
 */
	public function after($direction) {
		if ($direction === 'down') {
			return true;
		}

		foreach ($this->records as $model => $records) {
			if (!$this->updateRecords($model, $records)) {
				return false;
			}
		}

		return true;
	}

/**
 * Update model records
 *
 * @param string $model model name to update
 * @param string $records records to be stored
 * @return boolean Should process continue
 */
	public function updateRecords($model, $records) {
		$Model = $this->generateModel($model);
		foreach ($records as $record) {
			$Model->create();
			if (!$Model->save($record, false)) {
				return false;
			}
		}

		return true;
	}
}
