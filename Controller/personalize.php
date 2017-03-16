<?php
    class personalize {
        
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if ($ack){
                redirect("store", "home");
            }
        }
        
        function login_form() {
            loadView("header", ["title" => "Login"]);
            loadView("login_form");
            loadView("footer");
        }
        
        function login($arguments) {
            $ack = loadModel("personalize", "login", $arguments);
            if ($ack == false) {
                redirect("personalize", "login_form");
            }
            redirect("store", "home");
        }
        
        function register_form() {
            loadView("header", ["title" => "Register"]);
            loadView("register_form");
            loadView("footer");
        }
        
        function register($arguments) {
            $ack = loadModel("personalize", "register", $arguments);
            if ($ack == false) {
                redirect("personalize", "register_form");
            }
            redirect("store", "home");
        }
        
        function logout() {
            loadModel("personalize", "logout");
            redirect("guide", "initial");
        }
    }
?>