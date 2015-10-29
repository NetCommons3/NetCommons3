<?php
/**
 * DatabaseConfiguration Model
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('AppModel', 'Model');

/**
 * Summary for DatabaseConfiguration Model
 */
class DatabaseConfiguration extends AppModel {

/**
 * useTable
 *
 * @var bool
 */
	public $useTable = false;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datasource' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Invalid value',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'allowedChoice' => array(
				'rule' => array('inList', array('Database/Mysql', 'Database/Postgres')),
				/* 'message' => 'Invalid value', */
			)
		),
		'persistent' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'Invalid value',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'host' => array(
			'regex' => array(
				'rule' => array('custom', '/[\w\.]+/'),
				'message' => 'Invalid value',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'port' => array(
			'between' => array(
				'rule' => array('between', 0, 65535),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'database' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w]+/'),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'schema' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w]+/'),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prefix' => array(
			'custom' => array(
				'rule' => array('custom', '/[\w]+/'),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'login' => array(
			'regex' => array(
				'rule' => array('custom', '/[\w]+/'),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'regex' => array(
				'rule' => array('custom', '/[\w]+/'),
				'message' => 'Invalid value',
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
