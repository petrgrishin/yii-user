<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Module\User\Controller;


use CController;
use PetrGrishin\Module\User\Authentication\UserIdentity;
use PetrGrishin\Module\User\Form\SingInForm;
use PetrGrishin\View\Response;

class UserController extends CController {
//    public $layout = false;

    public function actionSignIn() {
        $singInForm = new SingInForm();
        if ($data = $this->getRequest()->getPost('data')) {
            $singInForm->setAttributes($data);
            if ($singInForm->validate() && $identity = $this->authenticate($singInForm->username, $singInForm->password)) {
                var_dump($this->getWebUser()->getName());
                return $this->renderText(new Response());
            }
        }
        $this->render('signIn');
    }

    public function actionSignUp() {

    }

    /**
     * @param string $login
     * @param string $password
     * @return bool|UserIdentity
     * @throws \CException
     */
    protected function authenticate($login, $password) {
        $identity = new UserIdentity($login, $password);
        if ($identity->authenticate()) {
            $this->getWebUser()->login($identity);
            return $identity;
        }
        return false;
    }

    protected function getWebUser() {
        return $this->getApp()->getUser();
    }

    protected function getRequest() {
        return $this->getApp()->getRequest();
    }

    /**
     * @return \CWebApplication
     */
    protected function getApp() {
        return \Yii::app();
    }
}
