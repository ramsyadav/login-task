<?php
include("database.php");
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'task');
//$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $passwordEscaped = mysqli_real_escape_string($db, $_POST['password']);
    $password = password_hash($passwordEscaped, PASSWORD_DEFAULT);
//    $password = md5(mysqli_real_escape_string($db, $_POST['password']));

    $result = mysqli_query($db, "SELECT client_id,user_name,password_hash FROM user WHERE user_name='$username'");
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (isset($row['password_hash']) && password_verify($passwordEscaped,$row['password_hash'])) {
        $_SESSION['login_user'] = $row['client_id'];
        $_SESSION['user_name'] = $row['user_name'];
        echo $row['client_id'];
    } else {
        echo 0;
    }
}
