<?php
/**
 * GroupPartFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for GroupPartFixture
 */
class GroupPartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'part_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'can_read_participant' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_add_participant' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_delete_participant' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_read_group' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_create_group' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_edit_group' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'can_delete_group' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'can_read_participant' => 1,
			'can_add_participant' => 1,
			'can_delete_participant' => 1,
			'can_read_group' => 1,
			'can_create_group' => 1,
			'can_edit_group' => 1,
			'can_delete_group' => 1,
			'created_user' => 1,
			'created' => '2014-06-02 16:17:56',
			'modified_user' => 1,
			'modified' => '2014-06-02 16:17:56'
		),
	);

}
