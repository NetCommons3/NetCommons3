<?php
/**
 * CommunityLangFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for CommunityLangFixture
 */
class CommunityLangFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'room_num' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'lang' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '言語(ja,en等)', 'charset' => 'utf8'),
		'community_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'コミュニティー名称', 'charset' => 'utf8'),
		'summary' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '概要', 'charset' => 'utf8'),
		'revision_root' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'revison.group_idと同値のrevisionの大本となるrevision.id'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'cl_room_num_idx' => array('column' => array('room_num', 'lang'), 'unique' => 0)
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
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 1,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'room_num' => 2,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 2,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'room_num' => 3,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 3,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'room_num' => 4,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 4,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'room_num' => 5,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 5,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'room_num' => 6,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 6,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'room_num' => 7,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 7,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'room_num' => 8,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 8,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'room_num' => 9,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 9,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'room_num' => 10,
			'lang' => 'Lorem ip',
			'community_name' => 'Lorem ipsum dolor sit amet',
			'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'revision_root' => 10,
			'created' => '2014-02-13 08:54:03',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:54:03',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
