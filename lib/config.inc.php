<?php

    /*
        MACROS FOR EASIAR PATH ACCESSIBILITY
    */

    define('SITE_ROOT', $_SERVER["DOCUMENT_ROOT"].'/../../home/ubuntu/workspace/Project_2/');
    define('VIEW_PATH', SITE_ROOT.'View/');
    define('MODEL_PATH', SITE_ROOT.'Model/');
    define('CONTROLLER_PATH', SITE_ROOT.'Controller/');
    define('JS_PATH', '/js/');
    define('CSS_PATH', '/css/');
    define('UPLOAD_PATH', '/uploads/');

    // render view
    function loadView($view, $data = []) {
        
        @extract($data, EXTR_PREFIX_INVALID, "num");
        
        $view_path = VIEW_PATH.$view.'.php';
        if (!file_exists($view_path)) {
            echo($view.' view not found');
            echo("<br/>Redirecting in 5 seconds....");
            header("Refresh:5; url=/");
            exit();
        }
        
        require_once($view_path);
        
    }
    
    // render model for performing some action
    function loadModel($model, $function, $arguments = []) {
        
        $model_path = MODEL_PATH.$model.'.php';
        if (!file_exists($model_path)) {
            echo($model.' model not found');
            echo("<br/>Redirecting in 5 seconds....");
            header("Refresh:5; url=/");
            exit();
        }
        
        require_once($model_path);
        
        $modelClass = $model.'Model';
        
        if (!method_exists($modelClass, $function)) {
            echo($function.' function not found in model '.$model);
            echo("<br/>Redirecting in 5 seconds....");
            header("Refresh:5; url=/");
            exit();
        }
        
        $obj = new $modelClass;
        return $obj->$function($arguments);
        
    }
    
    // utility function for easy generation of url
    function generate_url($controller, $function) {
        return "/index.php?controller=".$controller.'&function='.$function;
    }
    
    // utility function for redirecting the user
    function redirect($controller, $function) {
        header('Location: /index.php?controller='.$controller.'&function='.$function);
    }
    
?>