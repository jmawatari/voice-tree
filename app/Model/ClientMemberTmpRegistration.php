<?php
App::uses('AppModel', 'Model');
/**
 * ClientMemberTmpRegistration Model
 *
 */
class ClientMemberTmpRegistration extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'client_member_tmp_registration';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'client_member_tmp_registration_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'client_member_tmp_registration_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'client_member_tmp_registration_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mail_address' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'client_member_id' => array(
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
