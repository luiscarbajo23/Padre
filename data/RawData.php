<?php

/**
 * Description of DataUser
 *
 * @author Luis
 */




class RawData {
    
    
    public static function DataGetMoldsFromReferences($references) {
        
        require_once CONFIG_PATH . 'database.php';
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }

        $query = RawData::getQuery($references);
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        mysql_close($mysql_link);
        
        
        return RawData::buildResultFromOrder($result, $references);

    }
    
    private function getQuery($references) {
        
        return 'SELECT P.IDPIEZA, M.IDMOLDE, P.PRECIO
                        FROM MOLDES M 
                        RIGHT JOIN PIEZAS P 
                            ON M.IDPIEZA = P.IDPIEZA
		WHERE P.IDPIEZA IN ('. implode(",",$references) .')
                        UNION		
                        SELECT id as IDPIEZA, "NULL" as IDMOLDE, "NULL" as PRECIO
                        FROM ('. RawData::getExtraSelects($references) .' ) a
                        WHERE id NOT IN (SELECT IDPIEZA FROM PIEZAS)';

        
    }
    
    private function getExtraSelects ($references) {
        
        $selects = 'SELECT '.$references[0]. ' id ';
        array_shift($references);
        
        foreach ($references as $reference) {
            $selects .= ' UNION SELECT '.$reference. ' id  ';
        }
        
        return $selects;
    }
    
    public function getPieceInfo($piece, $dbArray) {
        
        for ($i = sizeof($dbArray) - 1; $i >= 0 ; $i--) {
            
            if ($dbArray[$i]["IDPIEZA"] == $piece) {
                return $dbArray[$i];
            }
        }
        return -1;
    }
    
    private function orderTheResultByReferencesOrder ($dbArray, $references) {
        
        $aux = array();
        
        foreach ($references as $piece) array_push($aux, RawData::getPieceInfo($piece,$dbArray));
        
        return $aux;
        
    }
    
    private function buildResultFromOrder ($result, $references) {
        
        $aux = [];

        while($row = mysql_fetch_array($result, MYSQL_ASSOC)) array_push($aux, $row);

        $auxSorted = RawData::orderTheResultByReferencesOrder ($aux,$references);
        
        return $auxSorted;
    }

}


