<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Module\User\Form;


use CFormModel;

class SingInForm extends CFormModel {
    public $username;
    public $password;
    public $rememberMe;

    public function attributeLabels() {
        return array(
            'username' => 'Username',
            'password' => 'Password',
            'rememberMe' => 'Remember me next time',
        );
    }

    public function rules() {
        return array(
            array('username, password', 'required'),
            array('rememberMe', 'boolean'),
        );
    }
}
