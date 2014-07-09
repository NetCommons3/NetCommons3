<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 * @author        Jun Nishikawa <topaz2@m0n0m0n0.com>
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class AppModel extends Model {

	static private $__useDbConfigPrevious;

/**
 * Constructor. Binds the model's database table to the object.
 *
 * @param boolean|integer|string|array $id Set this ID for this model on startup,
 * can also be an array of options, see above.
 * @param string $table Name of database table to use.
 * @param string $ds DataSource connection name.
 * @return void
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
	public function __construct($id = false, $table = null, $ds = null) {
		// If a datasource is set via params, use it and return
		if ((is_array($id) && isset($id['ds'])) || $ds) {
			parent::__construct($id, $table, $ds);

			return;
		}

		// Use a static variable, to only use one connection per page-call (otherwise we would get a new handle every time a Model is created)
		static $_useDbConfig;
		if (!isset($_useDbConfig)) {
			// Get all available database-configs
			$sources = ConnectionManager::enumConnectionObjects();

			// Find the slaves we have
			$slaves = array();
			foreach ($sources as $name => $values) {
				unset($values);
				// Slaves have to be named "slave1", "slave2", etc...
				if (preg_match('/^slave[0-9]+$/i', $name) == 1) {
					$slaves[] = $name;
				}
			}

			// Randomly use a slave
			$_useDbConfig = $slaves[rand(0, count($slaves) - 1)];
		}
		$this->useDbConfig = $_useDbConfig;

		parent::__construct($id, $table, $ds);
	}

/**
 * Called before each save operation, after validation. Return a non-true result
 * to halt the save.
 *
 * @param array $options Options passed from Model::save().
 * @return boolean True if the operation should continue, false if it should abort
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#beforesave
 * @see Model::save()
 */
	public function beforeSave($options = array()) {
		self::$__useDbConfigPrevious = $this->useDbConfig;
		$this->useDbConfig = 'master';
		return true;
	}

/**
 * Called after each successful save operation.
 *
 * @param boolean $created True if this save created a new record
 * @param array $options Options passed from Model::save().
 * @return void
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#aftersave
 * @see Model::save()
 */
	public function afterSave($created, $options = array()) {
		$this->useDbConfig = self::$__useDbConfigPrevious;
	}

/**
 * Called before every deletion operation.
 *
 * @param boolean $cascade If true records that depend on this record will also be deleted
 * @return boolean True if the operation should continue, false if it should abort
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#beforedelete
 * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
 */
	public function beforeDelete($cascade = true) {
		self::$__useDbConfigPrevious = $this->useDbConfig;
		$this->useDbConfig = 'master';
		return true;
	}

/**
 * Called after every deletion operation.
 *
 * @return void
 * @link http://book.cakephp.org/2.0/en/models/callback-methods.html#afterdelete
 */
	public function afterDelete() {
		$this->useDbConfig = self::$__useDbConfigPrevious;
	}
}
