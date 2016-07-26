<?php
require_once('config/session.php');
echo ucfirst($_SESSION['user_name'])." Welcome to Home Page \n";
?>
<br/><br/><a href="logout.php">Logout</a>