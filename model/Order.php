<?php

/**
 * Description of Order
 *
 * @author Luis
 */
class Order {
    
    private $idOrder;
    private $idClient;
    private $date;
    
    
    
    public function getIDOrder() {
        return $this->idOrder;
    }
    
    public function setIDOrder( $value ) {
        $this->idOrder = $value;
    }
    
    public function getIDClient() {
        return $this->idClient;
    }
    
    public function setIDClient( $value ) {
        $this->idClient = $value;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setDate( $value ) {
        $this->date = $value;
    }
}
