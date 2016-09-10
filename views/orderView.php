<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/orderView.css"?>">

<div class="containerTable">
    <div class="OrderTable" style="alignment-adjust: auto; float: left; width: 49%;">
                <table >
                    <tr>
                        <td>
                            <?php echo MOLD ?>
                        </td>
                        <td>
                            <?php echo SHELF ?>
                        </td>
                        <td >
                            <?php echo REFERENCE ?>
                        </td>
                        <td >
                            <?php echo PRICE ?>
                        </td>
                    </tr>
                    
                    <?php foreach ($moldsToView  as $struct) { ?>
                    <tr>
                        <td >
                            <?php  echo ((!empty($struct["IDMOLDE"]) && $struct["IDMOLDE"] != "NULL") ?  str_replace('"','', $struct["IDMOLDE"]) : NO_EXISTS);?>
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            <?php echo $struct["IDPIEZA"]; ?>
                        </td>
                        <td>
                            <?php echo (($struct["PRECIO"] != -1) && !empty($struct["PRECIO"]) && ($struct["PRECIO"] != "NULL") ?  str_replace('"','', $struct["PRECIO"]) . "" : "0");?>
                        </td>
                    </tr>
                    
                    <?php } ?>
              </table>
            </div>
    <div class="VoidPart" style="alignment-adjust: auto; float: right; width: 49%;">
        <p></p>
    </div>
</div>


