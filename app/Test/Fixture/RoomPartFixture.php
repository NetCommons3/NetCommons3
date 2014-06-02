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
			'part_id' => 1,
			'can_read_page' => 1,
			'can_edit_page' => 1,
			'can_create_page' => 1,
			'can_publish_page' => 1,
			'can_read_block' => 1,
			'can_edit_block' => 1,
			'can_create_block' => 1,
			'can_publish_block' => 1,
			'can_read_content' => 1,
			'can_edit_content' => 1,
			'can_create_content' => 1,
			'can_publish_content' => 1,
			'created_user_id' => 1,
			'created' => '2014-06-02 16:18:04',
			'modified_user_id' => 1,
			'modified' => '2014-06-02 16:18:04'
		),
	);

}
