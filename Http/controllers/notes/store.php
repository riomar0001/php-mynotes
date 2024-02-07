<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Session;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (!empty($errors)) {
    view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$id = $_SESSION["user"]["id"];


$db->query(
    'INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',
    [
        'body' => $_POST['body'],
        'user_id' => $id
    ]
);

Session::flash('errors', $form->errors());


header("Location: /notes");
die();
