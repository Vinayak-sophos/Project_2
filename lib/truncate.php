<?php

    /*
        utitlity file to empty database
    */

    require("config.inc.php");
    $mysql_db_hostname = "localhost";
    $mysql_db_user = "vishusachdeva";
    $mysql_db_password = "v1kCjsvLYytrBTGV";
    $mysql_db_database = "project_2";
    $conn = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database) or die("Could not connect database");
    $sql = "TRUNCATE cart";
    mysqli_query($conn, $sql);
    $sql = "TRUNCATE items";
    mysqli_query($conn, $sql);
    $sql = "TRUNCATE users";
    mysqli_query($conn, $sql);
    header('Location: /');
?>