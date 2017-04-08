<?php
    class personalize {
        
        function __construct() {
            if ($_GET['function'] == 'change_password_form' || $_GET['function'] == 'change_password') return;
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
                echo('Please enter valid credentials');
                echo("<br/>Redirecting in 5 seconds....");
                header("Refresh:5; url=".generate_url('personalize', 'login_form'));
                exit();
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
                echo('Please enter valid credentials');
                echo("<br/>Redirecting in 5 seconds....");
                header("Refresh:5; url=".generate_url('personalize', 'register_form'));
                exit();
            }
            redirect("store", "home");
        }
        
        function logout() {
            loadModel("personalize", "logout");
            redirect("guide", "initial");
        }
        
        function change_password_form() {
            loadView("header_home", ["title" => "Change Password"]);
            loadView("change_password");
            loadView("footer");
        }
        
        function change_password($arguments) {
            $ack = loadModel("personalize", "change_password", $arguments);
            if (!$ack) {
                echo("Wrong Password<br>Redirecting in 5 seconds...");
                header("refresh:5;url=".generate_url('personalize', 'change_password_form'));
            }
            else if ($ack == 2) {
                echo("New Password and Confirm Password must be same<br>Redirecting in 5 seconds...");
                header("refresh:5;url=".generate_url('personalize', 'change_password_form'));
            }
            else if ($ack == 1) {
                echo("Password Updated Successfully<br>Redirecting in 5 seconds...");
                header("refresh:5;url=".generate_url('store', 'home'));
            }
        }
        
    }
?>