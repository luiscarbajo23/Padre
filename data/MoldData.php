<?php

/**
 * Description of MoldData
 *
 * @author Luis
 */

class MoldData {

    
    public static function getAllPiecesFromMold($moldID) {
      
        require_once CONFIG_PATH . 'database.php';
        
        $mysql_link = mysql_connect($db["server"], $db["username"], $db["password"]);
        
        if (!$mysql_link) {
            throw new Exception("Database Connection Failed",-1);
        }

        $query = MoldData::getMoldPiecesQuery($moldID);
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        mysql_close($mysql_link);
        
        return MoldData::buildResultFromOrder($result);

    }
    
    private function getMoldPiecesQuery ($moldID) {
     
        return 'SELECT IDPIEZA, IDMOLDE '
                . 'FROM MOLDES '
                . 'WHERE IDMOLDE = "' . $moldID.'" and IDPIEZA <> 0;';
    }
    
    private function buildResultFromOrder ($result) {
        
        $aux = [];
        
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)) array_push($aux, $row);
        
        array_multisort($aux);

        return $aux;
    }
}
