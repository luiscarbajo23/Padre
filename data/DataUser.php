<?php

/**
 * Description of DataUser
 *
 * @author Luis
 */




class DataUser {
    
    
    public function DataGetPassword($username) {
        
        require_once CONFIG_PATH . 'database.php';
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }
        
        $query = " SELECT password 
                        FROM users 
                        WHERE username = '$username';";
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        
        mysql_close($mysql_link);
        
        $result = mysql_fetch_array($result, MYSQL_NUM);
        
        return $result[0];
    }
    
}
