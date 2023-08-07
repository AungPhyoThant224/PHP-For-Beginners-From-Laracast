<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$attributes = ['email' => $_POST['email'], 'password' => $_POST['password']];

$form = LoginForm::validate($attributes);

$signIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);
if (!$signIn) {
    $form->error('password', 'No matching account found for that email and password.')->throw();
}

redirect('/');

