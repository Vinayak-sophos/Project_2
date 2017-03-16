<?php
    class storeModel {
        
        public $conn;
        
        function __construct() {
            $mysql_db_hostname = "localhost";
            $mysql_db_user = "vishusachdeva";
            $mysql_db_password = "v1kCjsvLYytrBTGV";
            $mysql_db_database = "project_2";
            $this->conn = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database) or die("Could not connect database");
        }
        
        function getData($arguments) {
            if (isset($arguments)) {
                // show searched data
            }
            else {
                // show all data
            }
        }
        
    }
?>