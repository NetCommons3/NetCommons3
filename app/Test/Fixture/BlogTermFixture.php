<?php
/**
 * BlogTermFixture
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

/**
 * Summary for BlogTermFixture
 */
class BlogTermFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'content_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'カテゴリーかタグの名称', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '投稿や固定ページを表すカテゴリーかタグの名称であり、固定リンクのURLで利用', 'charset' => 'utf8'),
		'taxonomy' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'comment' => '0：分類（タグ）
1：分類（カテゴリー）', 'charset' => 'utf8'),
		'checked' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '記事の新規投稿時にカテゴリーやタグとして初期設定の対称にするかどうか'),
		'parent' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '種類がカテゴリーの場合に親子関係があればblog_termsのid'),
		'count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => '利用されている件数'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified_user_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bt_slug_unique' => array('column' => array('content_id', 'taxonomy', 'slug'), 'unique' => 1),
			'bt_taxonomy_idx' => array('column' => array('content_id', 'taxonomy'), 'unique' => 0),
			'bt_name_idx' => array('column' => array('content_id', 'name', 'taxonomy'), 'unique' => 0)
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
			'content_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 1,
			'count' => 1,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 1,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 1,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'content_id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 2,
			'count' => 2,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 2,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 2,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'content_id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 3,
			'count' => 3,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 3,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 3,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'content_id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 4,
			'count' => 4,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 4,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 4,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'content_id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 5,
			'count' => 5,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 5,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 5,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'content_id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 6,
			'count' => 6,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 6,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 6,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'content_id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 7,
			'count' => 7,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 7,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 7,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'content_id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 8,
			'count' => 8,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 8,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 8,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'content_id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 9,
			'count' => 9,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 9,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 9,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'content_id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'checked' => 1,
			'parent' => 10,
			'count' => 10,
			'created' => '2014-02-13 08:53:55',
			'created_user' => 10,
			'created_user_name' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-02-13 08:53:55',
			'modified_user' => 10,
			'modified_user_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
