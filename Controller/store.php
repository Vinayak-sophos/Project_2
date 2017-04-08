<?php
    class store {
        
        public $info;
        
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if (!$ack){
                redirect("personalize", "login_form");
            }
            session_start();
            $this->info = loadModel("personalize", "getInfo");
        }
        
        function home() {
            $this->info["title"] = "Dashboard";
            loadView("header_home", $this->info);
            loadView("home", $this->info);
            loadView("footer");
        }
        
        function my_items() {
            $this->info["title"] = "Added By You";
            loadView("header_home", $this->info);
            $data = loadModel("store", "my_items", $this->info);
            loadView("my_items", array_merge($data, $this->info));
            loadView("footer");
        }
        
        function store($arguments) {
            $this->info["title"] = "Store";
            loadView("header_home", $this->info);
            $data = loadModel("store", "getData", $arguments);
            loadView("store", $data);
            loadView("footer");
        }
        
        function add_items() {
            $this->info["title"] = "Add Items";
            loadView("header_home", $this->info);
            loadView("add_item_form");
            loadView("footer");
        }
        
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
        
        function remove($arguments) {
            loadModel("store", "remove", $arguments);
            redirect("store", "home");
        }
        
        function more_info($arguments) {
            $data = loadModel('store', 'getData', $arguments);
            $this->info["title"] = $data['item_name'];
            loadView('header_home', $this->info);
            loadView('show_item', array_merge($data, $this->info));
            loadView('footer');
        }
        
        function contact_seller($arguments) {
            loadView("header_home", $this->info);
            $data = loadModel("store", "contact_seller", $arguments);
            loadView("contact_seller", $data);
            loadView("footer");
        }
        
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
        
        function deposit($arguments) {
            loadView('header_home', ["title" => "Deposit Money"]);
            if (isset($_POST['deposit'])) {
                loadModel('personalize', 'deposit', $arguments);
                redirect('store', 'home');
            }
            else {
                loadView('deposit');
                loadView('footer');
            }
        }
        
        function cart() {
            loadView('header_home', ["title" => "My Cart"]);
            $data = loadModel('store', 'cart');
            loadView('cart', $data);
            loadView('footer');
        }
        
        function history() {
            loadview("header_home", ["title" => "Transactions"]);
            $data = loadModel("store", "history");
            loadView("history", $data);
            loadView("footer");
        }
        
    }
?>