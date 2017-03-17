<?php

    include_once('lib/config.inc.php');
    
    if (isset($_GET["controller"])){
        $controller = $_GET["controller"];
    }
    else{
        $controller = "guide";
    }
    
    if (isset($_GET["function"])){
        $function = $_GET["function"];
    }
    else{
        $function = "initial";
    }
    
    $controller_path = CONTROLLER_PATH.strtolower($controller).'.php';
    
    if (file_exists($controller_path)){
        require_once($controller_path);
        if (!method_exists($controller, $function)){
            die($function." function not found in controller ".$controller);
        }
        $obj = new $controller;
        $obj->$function(array_merge($_POST, $_GET, $_FILES));
    }
    else{
        die($controller.' controller not found');
    }
    
?>