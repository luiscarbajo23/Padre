<?php

require_once __DIR__ . '/config/variables.php';
require_once CONFIG_PATH . CONFIG_FILE;


   echo "<pre> GET ";
   var_dump($_GET);
   echo "<pre> POST ";
   var_dump($_POST);
   
   

if (empty($_GET["controller"]) || empty($_GET["method"])) { //Nothing in $_GET, redirect to login
    
    require_once VIEWS_PATH .'login.php';  
}
else {
    

die();
    
    $regex = "/^([a-zA-z]+)$/";
    
   $controller = filter_input(INPUT_GET, "controller");
   $method = filter_input(INPUT_GET, "method");
   
   preg_match($regex, $controller, $controller);
   preg_match($regex, $method, $method);
   
    $controllerToLoad = $controller[0];
    $methodToCall = $method[0];

    require_once CONTROLLERS_PATH . $controllerToLoad . ".php" ;
    
    $controllerInstanced = new $controllerToLoad;
    
    $controllerInstanced ->$methodToCall();
    
    
    
}




