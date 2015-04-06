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

class DataClient {
   
    public static function loadClientList() {
        
        require_once CONFIG_PATH . 'database.php';
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }
        
        $query = " SELECT client_id as ID, name
                        FROM clients
                        ORDER BY client_id
                        LIMIT 1000;";
        
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
           
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        
        mysql_close($mysql_link);
        
        $result1 = mysql_fetch_array($result, MYSQL_BOTH);
        $result2 = mysql_fetch_row($result);
        $result3 = mysql_fetch_field($result);
        $result4 = mysql_fetch_array($result, MYSQL_ASSOC);
     //   $result5 = mysql_($result);
        //$result = mysql_fetch_array($result, MYSQL_NUM);
        echo "<pre>";
        var_dump($result1);
        print_r($result2);
        print_r($result3);
        print_r($result4);
        //print_r($result5);
        die();
    }
}
