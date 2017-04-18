<?php

    /*
        all functions related to store
    */

    class storeModel {
        
        public $conn;
        
        // connecting to database
        function __construct() {
            $mysql_db_hostname = "localhost";
            $mysql_db_user = "vishusachdeva";
            $mysql_db_password = "v1kCjsvLYytrBTGV";
            $mysql_db_database = "project_2";
            $this->conn = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password, $mysql_db_database) or die("Could not connect database");
        }
        
        // important function
        // used to access items which are on sale by generating respective queries
        // like on searching, by user id, by any other user's id, by category, by college, by item id or whole items
        function getData($arguments) {
            $sql = "";
            if (isset($arguments['id'])) {
                $id = $arguments['id'];
                $sql = "SELECT * FROM items WHERE seller_id=".$id;
            }
            else if (isset($arguments['q'])) {
                $q = $arguments['q'];
                $sql = "SELECT * FROM items WHERE item_name LIKE '%".$q."%' OR description LIKE '%".$q."%'
                OR category LIKE '%".$q."%' OR college LIKE'%".$q."%'";
            }
            else if (isset($arguments['category'])) {
                $category = $arguments['category'];
                $sql = "SELECT * FROM items WHERE category='".$category."'";
            }
            else if (isset($arguments['college'])) {
                $college = $arguments['college'];
                $sql = "SELECT * FROM items WHERE college='".$college."'";
            }
            else if(isset($arguments['item_id'])) {
                $item_id = $arguments['item_id'];
                $sql = "SELECT * FROM items WHERE item_id=".$item_id;
            }
            else {
                $sql = "SELECT * FROM items";
            }
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $rows = [];
            while($row = mysqli_fetch_assoc($result)) array_push($rows, $row);
            $rows["len"] = mysqli_num_rows($result);
            return $rows;
        }
        
        // return all the items which are on sale by current logged in user
        function my_items($arguments) {
            $sql = "SELECT * FROM items WHERE seller_id=".$arguments["id"];
            $result = mysqli_query($this->conn, $sql);
            if ($result == false) {
                return false;
            }
            $rows = [];
            while($row = mysqli_fetch_assoc($result)) array_push($rows, $row);
            $rows["len"] = mysqli_num_rows($result);
            return $rows;
        }
        
        // upload image when user add item for sale
        function upload($arguments) {
            $target_dir = getcwd().DIRECTORY_SEPARATOR."uploads/";
            $target_file = $target_dir . basename($arguments["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            
            if(isset($arguments["submit"])) {
                $check = getimagesize($arguments["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    die("File is not an image.");
                    $uploadOk = 0;
                }
            }
            
            if (file_exists($target_file)) {
                die("Sorry, file already exists, change name of image.");
                $uploadOk = 0;
            }
            
            if ($arguments["fileToUpload"]["size"] > 500000) {
                die("Sorry, your file is too large.");
                $uploadOk = 0;
            }
            
            if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
                $uploadOk = 0;
            }
            
            if ($uploadOk == 0) {
                die("Sorry, your file was not uploaded.");
                
            } else {
                if (move_uploaded_file($arguments['fileToUpload']['tmp_name'], $target_file)) {
                    exec("chmod 777 ".$target_file);
                    return basename($arguments["fileToUpload"]["name"]);
                } else {
                    die("Sorry, there was an error uploading your file.");
                }
            }
        }
        
        // add item to database for sale
        function add_item_db($arguments) {
            if (!isset($arguments['category']) || empty($arguments['category']) || !isset($arguments['item_name']) ||
            empty($arguments['item_name']) || !isset($arguments['description']) || empty($arguments['description']) ||
            !isset($arguments['contact']) || empty($arguments['contact']) || !isset($arguments['choice']) ||
            empty($arguments['choice']) || (!isset($arguments['price']) && $arguments['choice'] == "sell") || 
            (empty($arguments['price']) && $arguments['choice'] == "sell") ||
            !isset($arguments['fileToUpload']) || empty($arguments['fileToUpload'])) return false;
            if (!is_numeric($arguments['contact']) || !is_numeric($arguments['price'])) return false;
            $img_name = $this->upload($arguments);
            $sql = "INSERT INTO items (seller_id, item_name, description, contact, choice, price, image, date, category, college) VALUES ("
            .$arguments['id'].", '".$arguments['item_name']."', '".$arguments['description']."', '".$arguments['contact']."', '".$arguments['choice']."', 
            '".$arguments['price']."', '".$img_name."', '".date('F d, Y')."', '".$arguments['category']."', '".$arguments['college']."')";
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            if ($result == false) {
                return false;
            }
            return true;
        }
        
        // remove item from the database
        function remove($arguments){
            $sql = "SELECT image FROM items WHERE item_id=".$arguments['item_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = mysqli_fetch_assoc($result);
            $dir = getcwd().DIRECTORY_SEPARATOR."uploads/";
            // if (file_exists($dir.$row['image'])) unlink($dir.$row['image']) or die('Error in deleting record');
            $sql = "DELETE FROM items WHERE item_id=".$arguments['item_id'];
            mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        }
        
        // contact seller (info of seller)
        function contact_seller($arguments) {
            $sql = "SELECT * FROM items WHERE item_id=".$arguments['item_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM users WHERE id=".$row['seller_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = array_merge($row, mysqli_fetch_assoc($result));
            return $row;
        }
        
        // cart for user (extract items from database which are bought by user)
        function cart() {
            $sql = "SELECT * FROM cart WHERE user_id=".$_SESSION['id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $rows = [];
            while($row = mysqli_fetch_assoc($result)) array_push($rows, $row);
            $rows["len"] = mysqli_num_rows($result);
            return $rows;
        }
        
        // buy item by item id
        function buy($arguments) {
            $sql = "SELECT * FROM items WHERE item_id=".$arguments['item_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = mysqli_fetch_assoc($result);
            if (intval($row['price']) > intval($arguments['balance'])) return null;
            $sql = "UPDATE users SET balance=balance-".intval($row['price'])." WHERE id=".$_SESSION['id'];
            mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $sql = "INSERT INTO cart (user_id, image, item_name, price, category, date) VALUES(".$_SESSION['id'].", '".$row['image']."',
            '".$row['item_name']."', ".$row['price'].", '".$row['category']."', '".date('F d, Y')."')";
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $this->remove($arguments);
            return 1;
        }
        
        // keep records of all the transactions by the user
        function history() {
            $sql = "SELECT * FROM items WHERE seller_id=".$_SESSION['id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $rows = [];
            while($row = mysqli_fetch_assoc($result)){ $row['status'] = "Sell"; array_push($rows, $row); }
            $rows["len"] = mysqli_num_rows($result);
            $sql = "SELECT * FROM cart WHERE user_id=".$_SESSION['id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            while($row = mysqli_fetch_assoc($result)){ $row['status'] = "Buy"; array_push($rows, $row); }
            $rows["len"] += mysqli_num_rows($result);
            return $rows;
        }
        
    }
?>