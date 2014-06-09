<?php
/**
 * FrameFixture
 *
 * @author   Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for FrameFixture
 */
class AnnouncementFrameFixture extends CakeTestFixture {

/**
 * table
 *
 * @var string
 */
	public $table = 'Frames';

/**
 * import
 *
 * @var string
 */
	public $import = 'Frame';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => NULL,
			'box_id' => 1,
			'parent_id' => 1,
			'lft' => 1,
			'rght' => 1,
			'plugin_id' => 1,
			'block_id' => 1,
			'weight' => 1,
			'is_published' => 1,
			'from' => '2014-06-02 16:17:56',
			'to' => '2014-06-02 16:17:56',
			'created_user_id' => 1,
			'created' => '2014-06-02 16:17:56',
			'modified_user_id' => 1,
			'modified' => '2014-06-02 16:17:56'
		),
		array(
			'id' => NULL,
			'box_id' => 1,
			'parent_id' => 1,
			'lft' => 1,
			'rght' => 1,
			'plugin_id' => 1,
			'block_id' => 100,
			'weight' => 1,
			'is_published' => 1,
			'from' => '2014-06-02 16:17:56',
			'to' => '2014-06-02 16:17:56',
			'created_user_id' => 1,
			'created' => '2014-06-02 16:17:56',
			'modified_user_id' => 1,
			'modified' => '2014-06-02 16:17:56'
		),
	);

}
