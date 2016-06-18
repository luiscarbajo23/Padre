<?php

/**
 * Description of Mold
 *
 * @author LuisCarbajo
 */

include_once DATA_PATH . 'MoldData.php';

class Mold {
    
    private $idMold;
    private $shelf;
    private $pieces;
    
    public function __construct($ID = -1) {
        $this->idMold = $ID;
        $this->pieces = NULL;
    }
    
    public function getIDMold() {
        return $this->idMold;
    }
    
    public function setIDMold( $value ) {
        $this->idMold = $value;
    }
    
    public function getShelf() {
        return $this->shelf;
    }
    
    public function setShelf( $value ) {
        $this->shelf = $value;
    }
    
    public function getPieces() {
        
        if (is_null($this->pieces)) $this->pieces = MoldData::getAllPiecesFromMold($this->idMold);
       
       return $this->pieces;

    }
}
