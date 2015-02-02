<?php
/**
 * SiteSetting Model
 *
 * @property CreatedUser $CreatedUser
 * @property ModifiedUser $ModifiedUser
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('AppModel', 'Model');

/**
 * Summary for SiteSetting Model
 */
class SiteSetting extends AppModel {

/**
 * construct
 *
 * @param int|string|array $id Set this ID for this model on startup, can also be an array of options, see above.
 * @param string $table Name of database table to use.
 * @param string $ds DataSource connection name.
 * @return  void
 * @since   v 3.0.0.0
 * @SuppressWarnings(PHPMD)
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	}

/**
 * サイトに設定されているテーマを返す
 *
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @return string or null
 */
	public function getSiteTheme() {
		$row = $this->find('first', array(
			'conditions' => array('SiteSetting.key' => 'theme'),
		));
		if ($row && isset($row['SiteSetting'])
			&& isset($row['SiteSetting']['value'])) {
			return $row['SiteSetting']['value'];
		}
		return null;
	}
}

