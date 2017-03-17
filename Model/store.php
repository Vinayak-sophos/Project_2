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
            if (isset($arguments['id'])) {
                $sql = "SELECT * FROM items WHERE seller_id=".$arguments['id'];
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
        
        function add_item_db($arguments) {
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
        
        function remove($arguments){
            $sql = "SELECT image FROM items WHERE item_id=".$arguments['item_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = mysqli_fetch_assoc($result);
            $dir = getcwd().DIRECTORY_SEPARATOR."uploads/";
            if (file_exists($dir.$row['image'])) unlink($dir.$row['image']) or die('Error in deleting record');
            $sql = "DELETE FROM items WHERE item_id=".$arguments['item_id'];
            mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
        }
        
        function contact_seller($arguments) {
            $sql = "SELECT * FROM items WHERE item_id=".$arguments['item_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = mysqli_fetch_assoc($result);
            $sql = "SELECT * FROM users WHERE id=".$row['seller_id'];
            $result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
            $row = array_merge($row, mysqli_fetch_assoc($result));
            return $row;
        }
        
    }
?>