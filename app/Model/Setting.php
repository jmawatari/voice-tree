<?php
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 */
class Setting extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'setting';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'setting_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'setting_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'setting_id' => array(
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
