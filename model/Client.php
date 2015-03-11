<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author Luis
 */
class Client {
    
    private $idClient;
    private $name;
    
    public function __construct() {}
    
    public function getIDClient() {
        return $this->idClient;
    }
    
    public function setIDClient($value) {
        $this->idClient = $value;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName( $value ) {
        $this->name = $value;
    }
}
