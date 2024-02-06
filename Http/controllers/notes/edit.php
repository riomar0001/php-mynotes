<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = $_SESSION["user"]["id"];


if (isset($_SESSION["user"]["id"])) {
    $currentUserId = $_SESSION["user"]["id"];

    $note = $db->query(
        "SELECT * FROM notes WHERE  id = :id",
        [
            "id" => $_GET["id"]
        ]
    )->findOrFail();

    authorize($note["user_id"] === $currentUserId);

    view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        "error" => [],
        'note' => $note
    ]);
} else {
    header("Location: /notes");
    die();
}
