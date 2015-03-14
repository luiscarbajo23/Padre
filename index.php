<?php

require_once dirname(__DIR__) . '/config/variables.php';
require_once $CONFIG_PATH . $CONFIG_FILE;


if (empty($_GET["controller"] || empty($_GET["method"]))) { //Nothing in $_GET, redirect to login
    
    require_once $VIEWS_PATH .'login.php;  
}
else {
    
    $regex = "/^([a-zA-z]+)/";
        
    preg_match($regex, $_GET["controller"], $controller);
    preg_match($regex, $_GET["method"], $method);
    
    require_once $CONTROLLERS_PATH . $controller . ".php" ;
    
}




