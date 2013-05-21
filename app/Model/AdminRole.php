<?php
App::uses('AppModel', 'Model');
/**
 * AdminRole Model
 *
 */
class AdminRole extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'admin_role';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'admin_role_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'admin_role_id' => array(
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
}
