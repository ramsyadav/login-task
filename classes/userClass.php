<?php

require_once('config/database.php');

class USER {

    private $conn;

    public function __construct() {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function doLogin($uname, $upass) {
        try {
            $stmt = $this->conn->prepare("SELECT client_id,user_name,password_hash FROM user WHERE user_name=:uname ");
            $stmt->execute(array(':uname' => $uname));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() == 1) {
                if (password_verify($upass, $userRow['password_hash'])) {
                    $_SESSION['login_user'] = $userRow['client_id'];
                    $_SESSION['user_name'] = $userRow['user_name'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() { 
        if (isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])) {
            return true;
        }
    }

    public function redirect($url) { //die($url);
        header("Location: $url");
        exit;
    }

    public function doLogout() {
        session_destroy();
        unset($_SESSION['login_user']);
        return true;
    }

}

?>