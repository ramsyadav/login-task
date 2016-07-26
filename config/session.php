<?php

session_start();
require_once 'classes/userClass.php';
$user = new USER();
if (!$user->is_loggedin()) {
    $user->redirect('index.php');
}