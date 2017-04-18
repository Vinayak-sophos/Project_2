<?php

    /*
        all pages and functions related to store
    */

    class store {
        
        public $info;
        
        // if not login then redirect to login form and if login then getting full info of user
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if (!$ack){
                redirect("personalize", "login_form");
            }
            session_start();
            $this->info = loadModel("personalize", "getInfo");
        }
        
        // render home page for the user
        function home() {
            $this->info["title"] = "Dashboard";
            loadView("header_home", $this->info);
            loadView("home", $this->info);
            loadView("footer");
        }
        
        // return items added for selling by the user
        function my_items() {
            $this->info["title"] = "Added By You";
            loadView("header_home", $this->info);
            $data = loadModel("store", "my_items", $this->info);
            loadView("my_items", array_merge($data, $this->info));
            loadView("footer");
        }
        
        // render store
        function store($arguments) {
            $this->info["title"] = "Store";
            loadView("header_home", $this->info);
            $data = loadModel("store", "getData", $arguments);
            loadView("store", $data);
            loadView("footer");
        }
        
        // render add item form
        function add_items() {
            $this->info["title"] = "Add Items";
            loadView("header_home", $this->info);
            loadView("add_item_form");
            loadView("footer");
        }
        
        // add item to the database
        function add_item_db($arguments) {
            $ack = loadModel("store", "add_item_db", array_merge($arguments, $this->info));
            if ($ack == false) {
                echo('Please enter valid data');
                echo("<br/>Redirecting in 5 seconds....");
                header("Refresh:5; url=".generate_url('store', 'add_items'));
                exit();
            }
            redirect("store", "home");
        }
        
        // remove item from database
        function remove($arguments) {
            loadModel("store", "remove", $arguments);
            redirect("store", "my_items");
        }
        
        // item description
        function more_info($arguments) {
            $data = loadModel('store', 'getData', $arguments);
            $this->info["title"] = $data[0]['item_name'];
            loadView('header_home', $this->info);
            loadView('show_item', array_merge($data, $this->info));
            loadView('footer');
        }
        
        // contact seller page
        function contact_seller($arguments) {
            loadView("header_home", $this->info);
            $data = loadModel("store", "contact_seller", $arguments);
            loadView("contact_seller", $data);
            loadView("footer");
        }
        
        // buy item, add item to cart
        function buy($arguments) {
            $check = loadModel("store", "buy", array_merge($arguments, $this->info));
            if ($check == null) {
                echo("Sorry, You don't have sufficient balance");
                echo("<br/>Redirecting in 5 seconds....");
                header("Refresh:5; url=/");
                exit();
            }
            redirect('store', 'cart');
        }
        
        // deposit money
        function deposit($arguments) {
            loadView('header_home', ["title" => "Deposit Money"]);
            if (isset($_POST['deposit'])) {
                $_SESSION['post'] = $_POST;
                header("Location: lib/phpcaptcha/demo.php");
                exit();
            }
            else {
                loadView('deposit');
                loadView('footer');
            }
        }
        
        // render cart
        function cart() {
            loadView('header_home', ["title" => "My Cart"]);
            $data = loadModel('store', 'cart');
            loadView('cart', $data);
            loadView('footer');
        }
        
        // render transactions
        function history() {
            loadview("header_home", ["title" => "Transactions"]);
            $data = loadModel("store", "history");
            loadView("history", $data);
            loadView("footer");
        }
        
    }
?>