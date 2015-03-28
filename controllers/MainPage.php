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
        
        if (filter_input(INPUT_SESSION, "authorized") == -1) {echo NOT_AUTHORIZED; die();}
        else {
            
            require_once VIEWS_PATH . "mainpage.php";
        }
        
    }
    
    
    
    
    
    
}
