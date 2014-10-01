<?php
/**
 * BoxFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for BoxFixture
 */
class BoxFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'container_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'space_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'room_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'page_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'weight' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'container_id' => 1,
			'type' => 1,
			'space_id' => 1,
			'room_id' => 1,
			'page_id' => 1,
			'weight' => 1,
			'created_user' => 1,
			'created' => '2014-06-02 16:17:54',
			'modified_user' => 1,
			'modified' => '2014-06-02 16:17:54'
		),
	);

}
