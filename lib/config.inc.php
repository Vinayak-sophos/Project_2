<?php

    define('SITE_ROOT', $_SERVER["DOCUMENT_ROOT"].'/../../home/ubuntu/workspace/Project_2/');
    define('VIEW_PATH', SITE_ROOT.'View/');
    define('MODEL_PATH', SITE_ROOT.'Model/');
    define('CONTROLLER_PATH', SITE_ROOT.'Controller/');
    define('JS_PATH', '/js/');
    define('CSS_PATH', '/css/');

    function loadView($view, $data = []) {
        
        @extract($data);
        
        $view_path = VIEW_PATH.$view.'.php';
        if (!file_exists($view_path)) {
            die($view.' view not found');
        }
        
        require_once($view_path);
        
    }
    
    function loadModel($model, $function, $arguments = []) {
        
        $model_path = MODEL_PATH.$model.'.php';
        if (!file_exists($model_path)) {
            die($model.' model not found');
        }
        
        require_once($model_path);
        
        $modelClass = $model.'Model';
        
        if (!method_exists($modelClass, $function)) {
            die($function.' function not found in model '.$model);
        }
        
        $obj = new $modelClass;
        return $obj->$function($arguments);
        
    }
    
    function generate_url($controller, $function) {
        return "/index.php?controller=".$controller.'&function='.$function;
    }
    
    function redirect($controller, $function) {
        header('Location: /index.php?controller='.$controller.'&function='.$function);
    }
    
?>