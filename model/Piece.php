<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of piece
 *
 * @author Luis
 */
class Piece {
    
    private $reference;
    private $weight;
    private $variable;
    private $price;
    private $model;
    private $modelShelf;
    private $clientCode;
    private $description;
    
    public function __construct() {
        $this->reference = -1;
    }
    
    public function getReference() {
        return $this->reference;
    }
    
    public function setReference( $value ) {
        $this->reference = $value;
    }
    
    public function getWeight() {
        return $this->weight;
    }
    
    public function setWeight( $value ) {
        $this->weight = $value;
    }
    
    
    public function getVariable() {
        return $this->variable;
    }
    
    public function setVariable( $value ) {
        $this->variable = $value;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($value) {
        $this->price;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function setModel( $value ) {
        $this->model = $value;
    }
    
    public function getModelShelf() {
        return $this->modelShelf;
    }
    
    public function setModelShelf( $value ) {
        $this->modelShelf = $value;
    }
    
    public function getClientCode() {
        return $this->clientCode;
    }
    
    public function setClientCode( $value ) {
        $this->clientCode = $value;
    }
    
    public function getDescription () {
        return $this->description;
    }
    
    public function setDescription ( $value ) {
        $this->description = $value;
    }
    
    
    
    
}
