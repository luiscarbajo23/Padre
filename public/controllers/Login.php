<?php

/**
 * Description of Login
 *
 * @author Luis
 */



class Login {


        
    public function __construct() {
        
        include_once MODEL_PATH . SEPARATOR . "User" . ".php";
        
        $_SESSION["authorized"] = -1;
    }
    
   public function checkPassword () {
       
       $username = filter_input(INPUT_POST, "Parameter1");
       $pass = filter_input(INPUT_POST, "Parameter2");
       
       $user = new User();
       $user->setUsername($username);
       $user->getPassword();
       
       try {
            if ($this->try_regex($username,$pass) && $user->checkPassword(hash("sha512",$pass))) {

                 $_SESSION["authorized"] = 1;
                 echo "Entramos en la pantalla principal";
                 $this->startMainPage();

             }
       } catch (Exception $ex) {
            
            echo "ERROR: " . $ex->getMessage();
            require_once VIEWS_PATH . 'login.php';
            return;
       }
   }
   
   public function index() {
       

       require_once VIEWS_PATH . 'login.php';
   }
   
   private function startMainPage () {
       
       header("Location: " . URL . SEPARATOR . MAINPAGE_CONTROLLER . SEPARATOR . "index");
       
   }
   
   
   private function try_regex($username, $pass) {
       
       
        $regex = "/^([a-zA-z0-9]+)$/";
       
        preg_match($regex, $username, $usernameRegex);
        preg_match($regex, $pass, $passRegex); 
        
        if ($username == $usernameRegex[0] && $pass == $passRegex[0]) return true;
        throw new Exception(REGEX_FAIL, -1, NULL);
   }
}