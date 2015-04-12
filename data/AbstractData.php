<?php

/**
 * Description of AbstractData
 *
 * @author Luis
 */

abstract class AbstractData {
    
    abstract protected function initializeDB();
    abstract protected function closeDB($mysql_link);
    
    protected function getAllInfo($result) {
        
        $returnValue = [];
        
        while ($row = mysql_fetch_array($result, MYSQL_NUM)){
          
            array_push($returnValue, $row);
            
        }
        
        return $returnValue;
    }
}
