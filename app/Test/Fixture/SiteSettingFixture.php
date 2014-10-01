<?php
/**
 * SiteSettingFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for SiteSettingFixture
 */
class SiteSettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_each_language' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'is_each_language' => 1,
			'created_user' => 1,
			'created' => '2014-04-15 02:46:23',
			'modified_user' => 1,
			'modified' => '2014-04-15 02:46:23'
		),
		array(
			'id' => 2,
			'name' => 'Theme',
			'is_each_language' => 0,
			'created_user' => 1,
			'created' => '2014-04-15 02:46:23',
			'modified_user' => 1,
			'modified' => '2014-04-15 02:46:23'
		),
	);

}
