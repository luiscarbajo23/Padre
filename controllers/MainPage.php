<?php

/**
 * Description of MainPage
 *
 * @author Luis
 */
class MainPage {
    
    public function __construct() {

    }
    
    public function index() {
        
        
        if ($_SESSION["authorized"] != 1) {echo NOT_AUTHORIZED; die();}
        else {

            require_once MODEL_PATH . 'ClientList.php';
            
            $clientList = new ClientList();
            
            try {
                $clientList->loadClientList();
            } catch (Exception $ex) {
                $this->showErrorFromException($ex);
                die();
            }
            

            //require_once VIEWS_PATH . "mainpage.php";
        }
        
    }
    
    private function showErrorFromException ($exception) {
        
        echo "This is the error: " . $exception->getMessage();
        
        //To-Do:Make a log (logger) system and a show systemin frontend
    }
    
    
    
    
}
