<?php

/**
 * Description of DataUser
 *
 * @author Luis
 */

require_once $CONFIG_PATH . 'database.php';


class DataUser {
    
    
    public function DataGetPassword($username) {
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }
        
        $query = "";
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        
        mysql_close($mysql_link);
        
        //TO-DO Transform result object (maybe fetch_array)
        
        return $result;
    }
    
}
