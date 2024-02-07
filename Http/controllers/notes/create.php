<?php

use Core\Session;

if (isset($_SESSION["user"]["id"])) {
    $currentUserId = $_SESSION["user"]["id"];

    view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => Session::get('errors')
    ]);
    

} else {
    header("Location: /notes");
    die();
}


