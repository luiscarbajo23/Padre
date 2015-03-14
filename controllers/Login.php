<?php

/**
 * Description of Login
 *
 * @author Luis
 */
class Login {
   
        
    public function __construct() {
        include_once '$MODEL_PATH' . "User" . ".php";
        
        $_SESSION["authorized"] = -1;
    }
    
   public function checkPassword () {
       
       $username = $_POST["parameterOne"];
       $pass = $_POST["parameterTwo"];
       
       $user = new User();
       
       if ($user->checkPassword($username, hash("sha512",$pass))) {
           
           $_SESSION["authorized"] = 1;
           
           //TO-DO Redirect to MainPage
           
       }
       else { //get back to login
           //TO-DO Load the login view again
       }
   }
   
   public static function index() {
       
       
       require_once dirname(__DIR__) . '/config/config.php';
       require_once dirname(__DIR__) . '/config/variables.php';
       
       require_once $VIEWS_PATH . 'login.php';
   }
}