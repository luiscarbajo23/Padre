<?php

/**
 * Description of ClientList
 *
 * @author Luis
 * 
 */

include_once MODEL_PATH . 'Piece.php';
include_once DATA_PATH . 'RawData.php';


class PieceList {
    
    private $pieceList = []; 
    
    
    
    public function __construct($arrayReferences) {
        
        foreach ($arrayReferences as $reference) {
            
            $pieceAux = new Piece();
            $pieceAux->setReference($reference);
            
            array_push($this->pieceList, $pieceAux);
        }
    }
    
    public function loadMoldsInfoFromPieces() {
        
        $arrayToRaw = [];
        
        foreach ($this->pieceList as $piece) {
            
            array_push($arrayToRaw, $piece->getReference());
        }
        
        $dataGetMoldsFromReferences = RawData::DataGetMoldsFromReferences($arrayToRaw);
        
        $this->refillPiecesList($dataGetMoldsFromReferences);
        
    }
    
    private function refillPiecesList($dataGetMoldsFromReferences) {
        
        //To-Do 
    }
}
