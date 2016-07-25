<?php
session_start();
if(empty($_SESSION['login_user'])){
header('Location: index.php');
}
echo ucfirst($_SESSION['user_name'])." Welcome to Home Page \n";
?>
<br/><br/><a href="logout.php">Logout</a>