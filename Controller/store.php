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
                redirect("store", "add_item_form");
            }
            redirect("store", "home");
        }
        
        function remove($arguments) {
            loadModel("store", "remove", $arguments);
            redirect("store", "home");
        }
        
        function contact_seller($arguments) {
            loadView("header_home", $this->info);
            $data = loadModel("store", "contact_seller", $arguments);
            loadView("contact_seller", $data);
            loadView("footer");
        }
        
    }
?>