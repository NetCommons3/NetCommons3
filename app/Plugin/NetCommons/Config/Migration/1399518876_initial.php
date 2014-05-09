<?php
class Initial extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'blocks' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'boxes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'container_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'space_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'room_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'boxes_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'box_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'is_visible' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'containers' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'containers_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'page_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'container_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'is_visible' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'frames' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'box_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'parent_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'plugin_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'block_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'from' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'to' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'frames_languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'frame_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'group_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'part_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'can_read_participant' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_add_participant' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_delete_participant' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_read_group' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_create_group' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit_group' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_delete_group' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'has_room' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'need_approval' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_parts_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'groups_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'can_read' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
					'can_edit' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'code' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'is_active' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_site_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'site_setting_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_user_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_user_attributes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_attributes_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'languages_user_select_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_select_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'language_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'pages' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'permalink' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'slug' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'is_published' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'from' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'to' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'parts_rooms_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'room_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'part_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'plugins' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'folder' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles_plugins' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'role_id' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
					'plugin_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'permission' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'roles_user_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'can_read' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'room_parts' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'part_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'can_read_page' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit_page' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_create_page' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_publish_page' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_read_block' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit_block' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_create_block' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_publish_block' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_read_content' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit_content' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_create_content' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_publish_content' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'rooms' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'space_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'top_page_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'site_setting_values' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'site_setting_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'site_settings' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'is_each_language' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'spaces' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'type' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'required' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'is_each_language' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_read_self' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'can_edit_self' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
					'position' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_attributes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_select_attributes' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_attribute_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'user_select_attributes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'user_select_attribute_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'value' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
					'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
					'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'blocks', 'boxes', 'boxes_pages', 'containers', 'containers_pages', 'frames', 'frames_languages', 'group_parts', 'groups', 'groups_languages', 'groups_parts_users', 'groups_users', 'languages', 'languages_pages', 'languages_parts', 'languages_roles', 'languages_site_settings', 'languages_user_attributes', 'languages_user_attributes_users', 'languages_user_select_attributes', 'pages', 'parts', 'parts_rooms_users', 'plugins', 'roles', 'roles_plugins', 'roles_user_attributes', 'room_parts', 'rooms', 'site_setting_values', 'site_settings', 'spaces', 'user_attributes', 'user_attributes_users', 'user_select_attributes', 'user_select_attributes_users', 'users'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
