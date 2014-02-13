<?php
/**
 * CommunityInvitationFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for CommunityInvitationFixture
 */
class CommunityInvitationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'コミュニティー招待ID'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'activate_key' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティー招待用承認用キー', 'charset' => 'utf8'),
		'is_pending_approval_mail' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '承認待ちメールかどうか'),
		'expires' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => '有効期限'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'room_num' => 1,
			'user_id' => 1,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 1,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'room_num' => 2,
			'user_id' => 2,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 2,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'room_num' => 3,
			'user_id' => 3,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 3,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'room_num' => 4,
			'user_id' => 4,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 4,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'room_num' => 5,
			'user_id' => 5,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 5,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'room_num' => 6,
			'user_id' => 6,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 6,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'room_num' => 7,
			'user_id' => 7,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 7,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'room_num' => 8,
			'user_id' => 8,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 8,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'room_num' => 9,
			'user_id' => 9,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 9,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'room_num' => 10,
			'user_id' => 10,
			'activate_key' => 'Lorem ipsum dolor sit amet',
			'is_pending_approval_mail' => 1,
			'expires' => 10,
			'created' => '2014-02-13 08:54:01',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:01',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
