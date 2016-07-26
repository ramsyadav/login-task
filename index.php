<?php
session_start();
if (!empty($_SESSION['login_user'])) {
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User login</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <script src="js/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="js/jquery.ui.shake.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            .input {
                margin-left: 11px;
                padding: 5px 5px 1px 3px;
            }
            .form-signin {
                margin: 9px 0 1px 15px;
            }
            .button.button-primary {
                margin-left: 10.5%;
            }
        </style>
    </head>
    <body>
        <div id="box" style="margin: 10% 10% 10% 32%">
            <div id="error">
            </div>
            <form action="#" method="post" onsubmit="return false;">
                <h2 class="form-signin-heading">User Login.</h2>
                <div class="form-signin">
                    <label>User name:</label>
                    <input type="text" class="input"  value="" id="username" placeholder="User Name"/>
                </div>
                <div class="form-signin">
                    <label>Password:</label>
                    <input type="password" class="input"  value="" id="password" placeholder="Password"/>
                </div>
                <div class="form-signin">
                    <input type="button" class="button button-primary" value="Log In" id="login"/>
                </div>
            </form> 
        </div>
    </body>
</html>