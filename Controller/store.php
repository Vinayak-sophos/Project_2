<?php
    class store {
        
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if (!$ack){
                redirect("personalize", "login_form");
            }
            session_start();
        }
        
        function home() {
            $info = loadModel("personalize", "getInfo");
            $info["title"] = "Welcome to OLX";
            loadView("header_home", $info);
            $data = loadModel("store", "getData", $_POST);
            loadView("store", $data);
            loadView("footer");
        }
        
    }
?>