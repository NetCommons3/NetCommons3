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
		'hierarchy' => array('type' => 'integer', 'length' => 11, 'null' => true, 'default' => null),
		'read_page' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'edit_page' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'create_page' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'publish_page' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'read_block' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'edit_block' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'create_block' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'publish_block' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'read_content' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'edit_content' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'create_content' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
		'publish_content' => array('type' => 'integer', 'length' => 2, 'null' => true, 'default' => null),
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
			'edit_content' => 1,
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
			'edit_content' => 1,
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
	);

}
