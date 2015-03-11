<?php

/**
 * Description of Mold
 *
 * @author LuisCarbajo
 */


class Mold {
    
    private $idMold;
    private $shelf;
    
    public function __construct() {}
    
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
}
