<?php

require_once('config/session.php');
require_once('classes/userClass.php');
$user_logout = new USER();
if (!empty($_SESSION['login_user'])) {
    $user_logout->doLogout();
    $user_logout->redirect('index.php');
}
