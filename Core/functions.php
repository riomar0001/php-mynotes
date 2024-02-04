<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isCurrent($currentPage)
{
    return $_SERVER["REQUEST_URI"] == $currentPage ? "bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" : "text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium";
}


function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }

    return true;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user["email"],
        "id" => $user["id"]
    ];

    session_regenerate_id();
}


function logout()
{

    $_SESSION = [];

    session_destroy();

    $params = session_get_cookie_params();

    setcookie("PHPSESSID", "", time() - 86400, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}
