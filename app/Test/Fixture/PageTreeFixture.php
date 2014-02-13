<?php
/**
 * PageTreeFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for PageTreeFixture
 */
class PageTreeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '先祖のpage_id'),
		'child' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '子孫のpage_id'),
		'stratum_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '先祖からみた子孫の階層'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'parent_id' => 1,
			'child' => 1,
			'stratum_num' => 1,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 2,
			'parent_id' => 2,
			'child' => 2,
			'stratum_num' => 2,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 3,
			'parent_id' => 3,
			'child' => 3,
			'stratum_num' => 3,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 4,
			'parent_id' => 4,
			'child' => 4,
			'stratum_num' => 4,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 5,
			'parent_id' => 5,
			'child' => 5,
			'stratum_num' => 5,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 6,
			'parent_id' => 6,
			'child' => 6,
			'stratum_num' => 6,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 7,
			'parent_id' => 7,
			'child' => 7,
			'stratum_num' => 7,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 8,
			'parent_id' => 8,
			'child' => 8,
			'stratum_num' => 8,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 9,
			'parent_id' => 9,
			'child' => 9,
			'stratum_num' => 9,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
		array(
			'id' => 10,
			'parent_id' => 10,
			'child' => 10,
			'stratum_num' => 10,
			'created' => '2014-02-13 08:54:38',
			'modified' => '2014-02-13 08:54:38'
		),
	);

}
