<?php

define("SEPARATOR", "/");

define("CONFIG_PATH", dirname(__DIR__) . SEPARATOR . "config" . SEPARATOR);
define("CONTROLLERS_PATH", dirname(__DIR__) . SEPARATOR . "controllers" . SEPARATOR);
define("DATA_PATH", dirname(__DIR__) . SEPARATOR . "data" . SEPARATOR);
define("MODEL_PATH", dirname(__DIR__) . SEPARATOR . "model" . SEPARATOR);
define("VIEWS_PATH", dirname(__DIR__) . SEPARATOR . "views" . SEPARATOR);
define("CSS_PATH",dirname(__DIR__) . SEPARATOR . "css" . SEPARATOR );
define("JAVASCRIPT_PATH",dirname(__DIR__) . SEPARATOR . "javascript" . SEPARATOR );


//FILES
define ("CONFIG_FILE","config.php");
define ("TEXT_FILE","text.php");


//Define controller names
define("LOGIN_CONTROLLER", "Login");
define("MAINPAGE_CONTROLLER", "MainPage");


require_once TEXT_FILE;