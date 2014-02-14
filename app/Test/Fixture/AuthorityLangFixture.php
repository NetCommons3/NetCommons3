<?php
/**
 * AuthorityLangFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for AuthorityLangFixture
 */
class AuthorityLangFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => '権限言語ID'),
		'authority_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '権限名', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'al_authority_id_idx' => array('column' => array('authority_id', 'lang'), 'unique' => 0)
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
			'authority_id' => 1,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'authority_id' => 2,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'authority_id' => 3,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'authority_id' => 4,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'authority_id' => 5,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'authority_id' => 6,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'authority_id' => 7,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'authority_id' => 8,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'authority_id' => 9,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'authority_id' => 10,
			'lang' => 'Lorem ip',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-02-13 08:53:41',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:41',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
