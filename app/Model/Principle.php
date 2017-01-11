<?php

App::uses('AppModel', 'Model');

/**
 * Principle Model
 *
 * @property User $User
 */
class Principle extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
            'naturalNumber' => array(
                'rule' => 'naturalNumber',
                'message' => '数値で入力してください。',
                'allowEmpty' => false
            ),
            'length' => array(
                'rule' => array('maxLength', 64),
                'message' => '64文字以下で入力してください。',
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'article' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '入力してください。',
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'length' => array(
                'rule' => array('maxLength', 256),
                'message' => '256文字以下で入力してください。',
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
