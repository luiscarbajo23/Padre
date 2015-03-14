<?php

require_once __DIR__ . '/config/variables.php';
require_once $CONFIG_PATH . $CONFIG_FILE;


if (empty($_GET["controller"]) || empty($_GET["method"])) { //Nothing in $_GET, redirect to login
    
    require_once $VIEWS_PATH .'login.php';  
}
else {
    
    $regex = "/^([a-zA-z]+)/";
        
    preg_match($regex, $_GET["controller"], $controller);
    preg_match($regex, $_GET["method"], $method);
    
    echo "ESTO LLEGA = ";    print_r($controller);    print_r($method);
    require_once $CONTROLLERS_PATH . $controller[0] . ".php" ;
    
    $class = "Class".$controller[0];
    $controllerInstanced = new $class();
    
    $controllerInstanced ->$method[0]();
    
}




