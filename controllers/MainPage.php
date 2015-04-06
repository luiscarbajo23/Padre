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
            
            $clientList->loadClientList();

            //require_once VIEWS_PATH . "mainpage.php";
        }
        
    }
    
    
    
    
    
    
}
