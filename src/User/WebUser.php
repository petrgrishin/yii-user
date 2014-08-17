<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Module\User\User;


use CWebUser;

class WebUser extends CWebUser {

    public static function className() {
        return get_called_class();
    }
}
 