<?php
    class personalizeModel {
        
        public $conn;
        
        function __construct() {
            $mysql_db_hostname = "localhost";
            $mysql_db_user = "vishusachdeva";
            $mysql_db_password = "v1kCjsvLYytrBTGV";
            $mysql_db_database = "project_2";
            $this->conn = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database) or die("Could not connect database");
        }
        
        function verify() {
            session_start();
            if (isset($_SESSION["id"])) {
                return true;
            }
            return false;
        }
        
        function validate($arguments = []) {
            return true;
        }
        
        function register($arguments) {
            if (!$this->validate($arguments)) return false;
            $sql = "INSERT INTO users (name, college, email, gender, password) VALUES ('".$arguments['name']."', '".$arguments['college']."', 
            '".$arguments['email']."', '".$arguments['gender']."', '".password_hash($arguments['password'], PASSWORD_BCRYPT)."')";
            $result = mysqli_query($this->conn, $sql);
            if (!$result) return false;
            session_start();
            $_SESSION["id"] = mysqli_insert_id($this->conn);
            return $result;
        }
        
        function login($arguments) {
            if (!$this->validate($arguments)) return false;
            $sql = "SELECT * FROM users WHERE email='".$arguments['email']."'";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            $row = mysqli_fetch_assoc($result);
            if (!password_verify($arguments["password"], $row["password"])) return false;
            session_start();
            $_SESSION["id"] = $row["id"];
            return true;
        }
        
        function logout() {
            session_start();
            session_destroy();
        }
        
        function getInfo() {
            $sql = "SELECT * FROM users WHERE id=".$_SESSION["id"];
            $result = mysqli_query($this->conn, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        
    }
?>