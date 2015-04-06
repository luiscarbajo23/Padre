<?php


/**
 * Description of ClientList
 *
 * @author Luis
 * 
 */

include_once MODEL_PATH . 'Client.php';
include_once DATA_PATH . 'DataClient.php';


class ClientList {
    
    private $clientsList = []; 
    
    
    
    public function __construct() {}
    
    public function getClientList() {
        
        return $this->clientsList;
    }
    
    public function loadClientList() {
        
        $auxArray = DataClient::loadClientList() ;
        
        for ($i = 0; $i < sizeof($auxArray); $i += 2) {
            array_push($this->clientsList, new Client($auxArray[i], $auxArray[i+1]));
        }
        
    }
    
   
}
