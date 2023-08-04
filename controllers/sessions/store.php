<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form
$errors = [];
if(!Validator::email($email)){
    $errors['email'] = "Please provide a valid email address";
}

if(! Validator::string($password)){
    $errors['password'] = "Please provide a valid password.";
}

if(! empty($errors)){
    return view('register/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

// check if the account already exists

$user = $db->query('select * from users where email = :email', [
    'email' => $email,
])->find();

if($user){
    if(password_verify($password, $user['password'])){
        login([
            'email' => $email
        ]);

        header('location:/');
        exit();
    }
}

return view('sessions/create.view.php', [
    'errors' => [
        'password' => 'No matching account found for that email and password.'
    ]
]);
