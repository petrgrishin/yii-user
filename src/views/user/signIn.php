<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
use PetrGrishin\HtmlTag\HtmlTag;

/** @var \PetrGrishin\Form\ActiveForm $form */

?>
<div class="wrapper">
    <?php
    $form = $this->widget(\PetrGrishin\Form\ActiveForm::className(), 'form', array(
        'class' => 'form-signin',
    ));
    HtmlTag::create('h3')
        ->addClass('form-signin-heading')
        ->setContent('Войдите, используя ваш аккаунт')
        ->run();
    $form->textField('username');
    $form->passwordField('password');
    print('<button class="btn btn-lg btn-default btn-block" type="submit">Войти</button>');
    $form->run();
    ?>
</div>
