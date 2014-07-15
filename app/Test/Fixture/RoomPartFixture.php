<?php
/**
 * RoomPartFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for RoomPartFixture
 */
class RoomPartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'part_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'weight' => array('type' => 'integer', 'null' => true, 'default' => null),
		'hierarchy' => array('type' => 'integer', 'null' => true, 'default' => null),
		'can_read_page' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_edit_page' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_create_page' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_publish_page' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_read_block' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_edit_block' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_create_block' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_publish_block' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_read_content' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_edit_content' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_create_content' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_publish_content' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'part_id' => '1',
			'weight' => '1',
			'hierarchy' => '99999999999',
			'can_read_page' => true,
			'can_edit_page' => true,
			'can_create_page' => true,
			'can_publish_page' => true,
			'can_read_block' => true,
			'can_edit_block' => true,
			'can_create_block' => true,
			'can_publish_block' => true,
			'can_read_content' => true,
			'can_edit_content' => true,
			'can_create_content' => true,
			'can_publish_content' => true,
		),
		array(
			'id' => '2',
			'part_id' => '2',
			'weight' => '2',
			'hierarchy' => '8000',
			'can_read_page' => true,
			'can_edit_page' => true,
			'can_create_page' => true,
			'can_publish_page' => false,
			'can_read_block' => true,
			'can_edit_block' => true,
			'can_create_block' => true,
			'can_publish_block' => false,
			'can_read_content' => true,
			'can_edit_content' => true,
			'can_create_content' => true,
			'can_publish_content' => false,
		),
		array(
			'id' => '3',
			'part_id' => '3',
			'weight' => '3',
			'hierarchy' => '7000',
			'can_read_page' => true,
			'can_edit_page' => false,
			'can_create_page' => false,
			'can_publish_page' => false,
			'can_read_block' => true,
			'can_edit_block' => false,
			'can_create_block' => false,
			'can_publish_block' => false,
			'can_read_content' => true,
			'can_edit_content' => true,
			'can_create_content' => true,
			'can_publish_content' => false,
		),
		array(
			'id' => '4',
			'part_id' => '4',
			'weight' => '4',
			'hierarchy' => '6000',
			'can_read_page' => true,
			'can_edit_page' => false,
			'can_create_page' => false,
			'can_publish_page' => false,
			'can_read_block' => true,
			'can_edit_block' => false,
			'can_create_block' => false,
			'can_publish_block' => false,
			'can_read_content' => true,
			'can_edit_content' => false,
			'can_create_content' => true,
			'can_publish_content' => false,
		),
		array(
			'id' => '5',
			'part_id' => '5',
			'weight' => '5',
			'hierarchy' => '1000',
			'can_read_page' => true,
			'can_edit_page' => false,
			'can_create_page' => false,
			'can_publish_page' => false,
			'can_read_block' => true,
			'can_edit_block' => false,
			'can_create_block' => false,
			'can_publish_block' => false,
			'can_read_content' => true,
			'can_edit_content' => false,
			'can_create_content' => false,
			'can_publish_content' => false,
		),
	);

}
