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
        
        
        
        $query = " SELECT M.IDPIEZA, M.IDMOLDE, M.ESTANTERIA, P.PRECIO
                        FROM MOLDES M INNER JOIN PIEZAS P ON M.IDPIEZA = P.IDPIEZA
                        WHERE M.IDPIEZA IN ( ". $this->getStringFromReferences($references) ." )
                        ORDER BY M.IDPIEZA ASC;";
        
        try {
            $result = mysql_db_query($db["database"], $query, $mysql_link);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage(), $ex->getCode());
        }
        
        mysql_close($mysql_link);
        
        $result = mysql_fetch_array($result, MYSQL_NUM);
        
        return $result;
    }
    
    private function getStringFromReferences($references) {

        $aux = $references[0];

        foreach ($references as $reference) {

            $aux .= "," . $reference;

        }
        return $aux;
    }
    
}
