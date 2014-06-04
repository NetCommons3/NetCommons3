<?php
/**
 * SiteSettingValue Model
 *
 * @property SiteSetting $SiteSetting
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('AppModel', 'Model');

/**
 * Summary for SiteSettingValue Model
 */
class SiteSettingValue extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'site_setting_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SiteSetting' => array(
			'className' => 'SiteSetting',
			'foreignKey' => 'site_setting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
