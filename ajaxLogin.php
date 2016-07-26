<?php
session_start();
require_once("classes/userClass.php");
$user = new USER();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = strip_tags($_POST['username']);
    $upass = strip_tags($_POST['password']);
    if ($user->doLogin($uname, $upass)) {
        echo 1;
    } else {
        echo 0;
    }
}


