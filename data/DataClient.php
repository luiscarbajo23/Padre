<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataClient
 *
 * @author Luis
 */

include_once DATA_PATH . 'AbstractData.php';

class DataClient extends AbstractData{
   
    public static function loadClientList() {
        
        $query = " SELECT client_id as ID, name
                        FROM clients
                        ORDER BY client_id
                        LIMIT 1000;";
        
        
        try {
            $mysql_info = DataClient::initializeDB();
            
            $result = mysql_db_query($mysql_info["db"]["database"], $query, $mysql_info["mysql_link"]);
           
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        
        DataClient::closeDB($mysql_info["mysql_link"]);
        
        $clientsArray = DataClient::getAllInfo($result);
              
        return $clientsArray;
    }

       
    protected function initializeDB() {
        
        require_once CONFIG_PATH . 'database.php';
        
        $mysql_info = [];
        
        $mysql_info["db"] =  $db;
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }
        
        $mysql_info["mysql_link"] = $mysql_link;
        
        return $mysql_info;
    }

    protected function closeDB($mysql_link) {
        mysql_close($mysql_link);
    }

}
