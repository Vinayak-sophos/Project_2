<?php

    /*
        initial page
    */

    class guide {
        
        // if already login then redirect to store
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if ($ack){
                redirect("store", "home");
            }
        }
        
        // if not logged in then open home page
        function initial() {
            loadView("header", ["title" => "Online Store"]);
            loadView("initial");
            loadView("footer");
        }
        
    }
?>