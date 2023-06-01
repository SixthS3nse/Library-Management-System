<?php
//Prompt Logout Confirmation
session_start();
/* To Be Confirm Features for these lines of codes
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
*/
session_destroy();
$_SESSION = array();
header("Location:login.html");
?>
