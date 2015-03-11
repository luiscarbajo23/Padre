<?php

/**
 * Description of LoginController
 *
 * @author Luis
 */
class LoginController {
   
        
    public function __construct() {
        include_once '$MODEL_PATH' . "User" . ".php";
        
        $_SESSION["authorized"] = -1;
    }
    
   public function index () {
       
       $username = $_POST["parameterOne"];
       $pass = $_POST["parameterTwo"];
       
       $user = new User();
       
       if ($user->checkPassword($username, hash("sha512",$pass))) {
           
           $_SESSION["authorized"] = 1;
           
           //TO-DO Load the Main View
           
       }
       else { //get back to login
           //TO-DO Load the login view again
       }
   }
}
