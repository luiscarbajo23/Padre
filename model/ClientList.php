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
        
        try {
            $auxArray = DataClient::loadClientList();
            
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode(), $ex);
        }
        
        foreach ($auxArray as $client) {
            
            array_push($this->clientsList, new Client($client[0], $client[1]));
            
        }   
        
        echo "<pre>";
        print_r($this->clientsList);
        die();
    }
}
