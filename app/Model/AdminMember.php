<?php
App::uses('AppModel', 'Model');
/**
 * AdminMember Model
 *
 * @property AdminRole $AdminRole
 */
class AdminMember extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'admin_member';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'admin_member_id';

/**
 * before save
 */
public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])){
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return ture;
}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'admin_member_id' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AdminRole' => array(
			'className' => 'AdminRole',
			'foreignKey' => 'admin_role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
