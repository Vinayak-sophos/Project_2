<?php
    class guide {
        
        function __construct() {
            $ack = loadModel("personalize", "verify");
            if ($ack){
                redirect("store", "home");
            }
        }
        
        function initial() {
            loadView("header", ["title" => "Online Store"]);
            loadView("initial");
            loadView("footer");
        }
        
    }
?>