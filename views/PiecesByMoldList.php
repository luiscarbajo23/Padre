<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/clientsTable.css"?>">

<div class="containerTable">
    <div class="ClientsTable" style="alignment-adjust: auto; float: left; width: 49%;">
                <table >
                    <tr>
                        <td>
                            <?php echo MOLD ?>
                        </td>
                        <td>
                            <?php echo PIECE ?>
                        </td>
                    </tr>
                    
                    <?php foreach ($arrayPieces as $piece) { ?>
                    <tr>
                        <td >
                            <?php echo($piece["IDMOLDE"]);?>
                        </td>
                        <td >
                            <?php echo($piece["IDPIEZA"]);?>
                        </td>
                    </tr>
                    
                    <?php } ?>
              </table>
            </div>
    <div class="VoidPart" style="alignment-adjust: auto; float: right; width: 49%;">
        <p> </p>
    </div>
    
</div>
            