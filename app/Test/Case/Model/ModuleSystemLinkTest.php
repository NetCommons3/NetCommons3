<?php
/**
 * ModuleSystemLink Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('ModuleSystemLink', 'Model');

/**
 * Summary for ModuleSystemLink Test Case
 */
class ModuleSystemLinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.module_system_link',
		'app.authority',
		'app.authority_lang',
		'app.module_link',
		'app.module',
		'app.archive',
		'app.content',
		'app.announcement_edit',
		'app.announcement',
		'app.block',
		'app.page',
		'app.page_column',
		'app.page_layout',
		'app.page_meta',
		'app.page_style',
		'app.page_sum_view',
		'app.user',
		'app.community_invitation',
		'app.page_user_link',
		'app.passport',
		'app.upload',
		'app.upload_link',
		'app.user_group_link',
		'app.user_group',
		'app.user_item_link',
		'app.user_item',
		'app.user_item_authority_link',
		'app.user_item_lang',
		'app.page_theme',
		'app.blog_style',
		'app.whatsnew_select_room',
		'app.whatsnew_select_user',
		'app.whatsnew_style',
		'app.blog_comment',
		'app.blog_post',
		'app.blog_term_link',
		'app.blog_term',
		'app.blog',
		'app.revision',
		'app.config_lang',
		'app.config'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ModuleSystemLink = ClassRegistry::init('ModuleSystemLink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ModuleSystemLink);

		parent::tearDown();
	}

}
