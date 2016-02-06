<?php

/**
 * Description of MainPage
 *
 * @author Luis
 */
class MainPage {
    
    public function __construct() {

    }
    
    public function index() {
        
        if ($_SESSION["authorized"] != 1) {echo NOT_AUTHORIZED; die();}
        else {
            
            if (! isset($_POST["actionTrigered"])) require_once VIEWS_PATH . "mainpage.php";
            else {
                    switch (filter_input(INPUT_POST, "actionTrigered")) {

                        case CLIENTS_LIST:

                            $this->showClientsList();

                            break;

                        case INTRODUCE_ORDER:
                            
                            $this->showOrdersView();

                            break;
                        
                        case SHOW_ORDER:
                            
                            $this->showOrderRequired();
                            break;

                        case CONSULT:

                            $this->showConsult();
                            break;

                        default:
                            $this->showError("FUCK THIS SHIT AGAIN!");
                            break;
                    }
              }
         }
    }
    
    private function showClientsList () {
       
        require_once MODEL_PATH . 'ClientList.php';
            
            $clientList = new ClientList();
            
            try {
                $clientList->loadClientList();
            } catch (Exception $ex) {
                $this->showError($ex);
                die();
            }
            
            $arrayClients = $clientList->getClientList();
            require_once VIEWS_PATH . 'clientsList.php';
    }
    
    private function showConsult () {
        
        //To-DO Show TextArea to load all the pieces
    }
    
    private function showOrdersView () {
        
        require_once VIEWS_PATH . 'introduceOrder.php';
    }
    
    private function showOrderRequired () {
        
         require_once MODEL_PATH . 'ModelController.php';
         
         $modelController = new ModelController->getInstance();
         
         
         $moldsToView = $modelController->loadMoldsInfoFromPieces(explode(",", filter_input(INPUT_POST, "orderText")));
        
         require_once VIEWS_PATH . 'orderView.php';
         
    }
    
    private function showError ($error) {
        
        if (get_class($error) == "Exception") echo "This is the error: " . $exception->getMessage();
        else {
            echo $error;
        }
        
        
        //To-Do:Make a log (logger) system and a show system on frontend
    }
    
    
    
    
}
