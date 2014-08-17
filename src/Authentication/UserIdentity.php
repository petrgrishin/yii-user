<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Module\User\Authentication;


use CUserIdentity;
use PetrGrishin\Module\User\User\User;

class UserIdentity extends CUserIdentity {
    /** @var User */
    protected $user;

    public function authenticate() {
        return true;
    }

}
