<?php

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
