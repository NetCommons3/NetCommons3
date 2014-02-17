<?php
/**
 * Content Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('Content', 'Model');

/**
 * Summary for Content Test Case
 */
class ContentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.content',
		'app.module',
		'app.archive',
		'app.user_group',
		'app.user_group_link',
		'app.user',
		'app.authority',
		'app.authority_lang',
		'app.module_link',
		'app.module_system_link',
		'app.page_user_link',
		'app.community_invitation',
		'app.page_sum_view',
		'app.page',
		'app.block',
		'app.blog_style',
		'app.whatsnew_select_room',
		'app.whatsnew_select_user',
		'app.whatsnew_style',
		'app.page_column',
		'app.page_layout',
		'app.page_meta',
		'app.page_style',
		'app.page_theme',
		'app.passport',
		'app.upload',
		'app.upload_link',
		'app.user_item_link',
		'app.user_item',
		'app.user_item_authority_link',
		'app.user_item_lang',
		'app.config_lang',
		'app.config',
		'app.announcement_edit',
		'app.announcement',
		'app.blog_comment',
		'app.blog_post',
		'app.blog_term_link',
		'app.blog_term',
		'app.blog',
		'app.revision'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Content = ClassRegistry::init('Content');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Content);

		parent::tearDown();
	}

}
