<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author LuisCarbajo
 */
class User {
    
    private $userID;
    private $username;
    private $password;
    private $dataUser;
    

    public function __construct() {
        $this->userID = NULL;
        $this->username = NULL;
        $this->password = NULL;
        
    }
    
    public function getUserID () {
        return $this->userID;        
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function setUsername ($value) {
        $this->username = $value;
    }
    
    public function getPassword () {
        
        if (is_null($this->password) && !is_null($this->getUsername())) {
           
            require_once DATA_PATH . 'DataUser.php';
            $this->dataUser = new DataUser();
            
            try {
                $passAux = $this->dataUser->DataGetPassword($this->getUsername());
            } catch (Exception $ex) {
                throw $ex;
                
            }
            
            $this->setPassword($passAux);
            
            return $passAux; 
            
        }
        //This password was seted before
        return $this->password;
    }
    
    public function setPassword ($value) {
        $this->password = $value;
    }
    
    public function checkPassword ($password) {
        
        if ($this->getPassword() == $password) return TRUE;
        throw new Exception(PASS_FAIL, -1, NULL);
    }
}
