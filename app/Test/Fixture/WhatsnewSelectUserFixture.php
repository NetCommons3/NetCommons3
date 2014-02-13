<?php
/**
 * WhatsnewSelectUserFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for WhatsnewSelectUserFixture
 */
class WhatsnewSelectUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '新着選択会員ID（指定した会員のマイポータルのみの新着を表示する場合に指定）'),
		'block_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
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
			'user_id' => 1
		),
		array(
			'id' => 2,
			'block_id' => 2,
			'user_id' => 2
		),
		array(
			'id' => 3,
			'block_id' => 3,
			'user_id' => 3
		),
		array(
			'id' => 4,
			'block_id' => 4,
			'user_id' => 4
		),
		array(
			'id' => 5,
			'block_id' => 5,
			'user_id' => 5
		),
		array(
			'id' => 6,
			'block_id' => 6,
			'user_id' => 6
		),
		array(
			'id' => 7,
			'block_id' => 7,
			'user_id' => 7
		),
		array(
			'id' => 8,
			'block_id' => 8,
			'user_id' => 8
		),
		array(
			'id' => 9,
			'block_id' => 9,
			'user_id' => 9
		),
		array(
			'id' => 10,
			'block_id' => 10,
			'user_id' => 10
		),
	);

}
