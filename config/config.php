<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author Luis
 */
class Config {
    
    private static $config ;
    private $db;
    
    
    
    function __construct() {}
   
   private function  getInstance() {
       
       if (is_null($this)) {
           $this->config = new Config();
           $this->db = $this->initializeDB();
       }
       
       return $this->config;
   }
   
   
   private function initializeDB() {
       
       $db = NULL;
       
       $db[$ENVIROMENT]['username'] = '***';
       $db[$ENVIROMENT]['password'] = '***';
       $db[$ENVIROMENT]['database'] = '***';
       
       return $db;

   }
   
   
   
   
    
}
