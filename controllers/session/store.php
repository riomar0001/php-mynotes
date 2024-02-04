<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please enter your email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please enter your password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();


if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
            'id' => $user['id']
        ]);
        header('location: /');
        exit();
    } 
}


return view('session/create.view.php', [
    'errors' => [
        'email' => 'No Matching account for that email address and password.'
    ]
]);