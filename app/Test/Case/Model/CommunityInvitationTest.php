<?php
/**
 * CommunityInvitation Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('CommunityInvitation', 'Model');

/**
 * Summary for CommunityInvitation Test Case
 */
class CommunityInvitationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.community_invitation',
		'app.user',
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
		'app.upload_link',
		'app.upload',
		'app.user_group',
		'app.user_group_link',
		'app.config_lang',
		'app.config',
		'app.module_system_link',
		'app.page_user_link',
		'app.passport',
		'app.user_item_link',
		'app.user_item',
		'app.user_item_authority_link',
		'app.user_item_lang'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommunityInvitation = ClassRegistry::init('CommunityInvitation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommunityInvitation);

		parent::tearDown();
	}

}
