<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Record $Record
 */
class User extends AppModel
{

    public $validate = array(
        'username' => array(
            'sy_name_semak_wajib_isi' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            ),
            'saya_nak_semak_unik' => array(
                'rule' => 'isUnique',
                'message' => 'A username telah wujud'
            ),
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            ),
            'pattern' => array(
                'rule' => '/^(?=.*[a-z])(?=.*\d).*$/',
                'message' => 'Mesti mengandungi gabungan huruf dan nombor'
            )
        )
    );
    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Record' => array(
            'className' => 'Record',
            'foreignKey' => 'user_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),

    );

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
