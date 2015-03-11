<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelController
 *
 * @author LuisCarbajo
 */
class ModelController {
    
    private static $modelController;
    
       
    private function __construct() {}
     
    public function  getInstance() {
       
       if (is_null($this)) {
           $this->modelController = new ModelController();
       }
       
       return $this->modelController;
   }
    
}
