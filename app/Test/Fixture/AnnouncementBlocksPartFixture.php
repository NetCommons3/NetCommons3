<?php
/**
 * AnnouncementBlocksPartFixture
 *
 * @author   Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for AnnouncementBlocksPartFixture
 */
class AnnouncementBlocksPartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'announcement_block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'part_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'can_edit_content' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'can_publish_content' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'can_send_mail' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'create_user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'announcement_blocks_parts_announcement_block_id' => array('column' => array('announcement_block_id', 'part_id'), 'unique' => 1)
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
			'announcement_block_id' => 1,
			'part_id' => 1,
			'can_edit_content' => 1,
			'can_publish_content' => 1,
			'can_send_mail' => 1,
			'created' => '2014-06-05 13:19:24',
			'create_user_id' => 1,
			'modified' => '2014-06-05 13:19:24',
			'modified_user_id' => 1
		),
	);

}
