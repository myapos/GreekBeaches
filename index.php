<?php


session_start();
$_SESSION["role"]="guest";
$_SESSION["myusername"]="";
//$_SESSION['hello'] = 'world';
/*$cookie_name="guest";
$cookie_role="guest";
setcookie($cookie_name, $cookie_role, time() + (86400 * 30), "/");*/
session_write_close ();
header("location:home.php");
?>
