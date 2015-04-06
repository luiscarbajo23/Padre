<?php

require_once __DIR__ . '/config/variables.php';
require_once CONFIG_PATH . CONFIG_FILE;

session_start();

    
if (!empty($_GET["controller"]) && !empty($_GET["method"])) {
    
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



}else {//Load the login view

    require_once VIEWS_PATH . "login.php";    
}
    




/*$code=<<<heredocs
<html>
<head>
</head>
<body onload="document.thisform.firstname.focus()">
<div style="text-align: center;">
<h1>Metaleris</h1>
<div>
<form name="thisform" action="/login/checkPassword" method="post">
  Usuario: <input type="text" tabindex=1 name="Parameter1" /><br>
Password: <input type="password" tabindex=2 name="Parameter2" /><br>
</div>
<input type="submit" name="submit" tabindex=3 value="Submit" />
</form>
 </div>
$errmsg
</body>
</html>
heredocs;
echo $code;
 */




  //  error_reporting(E_ALL | E_STRICT);
  //  ini_set('display_errors', '1');
  //  $errmsg = "POST is:<br>";
  //  foreach($_POST as $k=>$v)
  //  $errmsg .= "$k is $v<br>";


/* echo "GET: ";            var_dump($_GET);
    echo "isset is true<br>"; var_dump($_POST);
    echo "Entered values are:<br>";
    echo("First name: '" . $_POST['firstname']."' - " .
    strlen($_POST['firstname'])." chars long<br />");
    echo("Last name: '" . $_POST['lastname']."' - " .
    strlen($_POST['lastname'])." chars long <br />");
    echo $errmsg; 
 */