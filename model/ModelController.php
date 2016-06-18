<?php

/**
 * Description of ModelController
 *
 * @author LuisCarbajo
 */

require_once MODEL_PATH . 'PieceList.php';

class ModelController {
    
    private static $modelController;
    

    public function __construct() {}
     
    public function  getInstance() {
       
       if (is_null($this->modelController)) {
           $this->modelController = new ModelController();
       }
       
       return $this->modelController;
   }
   
   public function loadMoldsInfoFromPieces ($arrayPieces) {
       
       $piecesList = new PieceList($arrayPieces);
       
       return $piecesList->loadMoldsInfoFromPieces();

   }
    
}
