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

                        case CONSULT_MOLD:

                            $this->showPiecesByMoldView();
                            break;
                        
                        case "MoldText":
                            $this->showPiecesByMold();
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
    
    private function showPiecesByMold () {
        
        require_once MODEL_PATH . 'Mold.php';
        
        $mold = new Mold(filter_input(INPUT_POST, "MoldText"));
        
        try {
                $arrayPieces = $mold->getPieces();
            } catch (Exception $ex) {
                $this->showError($ex);
                die();
            }
            
            require_once VIEWS_PATH . 'PiecesByMoldList.php';
        
    }
    
    private function showOrdersView () {
        
        require_once VIEWS_PATH . 'introduceOrder.php';
    }
    
    private function showOrderRequired () {
        
         require_once MODEL_PATH . 'ModelController.php';
         
         $modelController = new ModelController();
         
         
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
    
    private function showPiecesByMoldView () {
        
        require_once VIEWS_PATH . 'introduceMold.php';
    }
    
    
}
