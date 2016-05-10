<?php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

    class User extends AppModel {

        public $validate = array(
          'username' => 'isUnique',
            'password' => 'notBlank',
            'role' => array(
                'rule' => array('inList', array('user', 'admin')),
                'message' => 'Некоректное значение роли'

            )
        );
        public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new BlowfishPasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
                );
            }
            return true;
        }

    }

?>