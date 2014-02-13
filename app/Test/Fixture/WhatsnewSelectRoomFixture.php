<?php
/**
 * WhatsnewSelectRoomFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for WhatsnewSelectRoomFixture
 */
class WhatsnewSelectRoomFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '新着選択ルームID（指定したルームのみの新着を表示する場合に指定）'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0'),
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
			'block_id' => 1,
			'room_num' => 1
		),
		array(
			'id' => 2,
			'block_id' => 2,
			'room_num' => 2
		),
		array(
			'id' => 3,
			'block_id' => 3,
			'room_num' => 3
		),
		array(
			'id' => 4,
			'block_id' => 4,
			'room_num' => 4
		),
		array(
			'id' => 5,
			'block_id' => 5,
			'room_num' => 5
		),
		array(
			'id' => 6,
			'block_id' => 6,
			'room_num' => 6
		),
		array(
			'id' => 7,
			'block_id' => 7,
			'room_num' => 7
		),
		array(
			'id' => 8,
			'block_id' => 8,
			'room_num' => 8
		),
		array(
			'id' => 9,
			'block_id' => 9,
			'room_num' => 9
		),
		array(
			'id' => 10,
			'block_id' => 10,
			'room_num' => 10
		),
	);

}
