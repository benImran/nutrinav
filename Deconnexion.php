<?php
/**
 * Created by PhpStorm.
 * User: benchaa
 * Date: 29/05/2017
 * Time: 14:25
 */
session_start();
session_unset();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();
header("Location: Connexion.php");
die();
