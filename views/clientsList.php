<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/clientsTable.css"?>">

<div class="containerTable">
    <div class="ClientsTable" style="alignment-adjust: auto; float: left; width: 49%;">
                <table >
                    <tr>
                        <td>
                            <?php echo CLIENT_ID ?>
                        </td>
                        <td >
                            <?php echo CLIENT_NAME ?>
                        </td>
                    </tr>
                    
                    <?php foreach ($arrayClients as $client) { ?>
                    <tr>
                        <td >
                            <?php echo $client->getIDClient();?>
                        </td>
                        <td>
                            <?php echo $client->getName() ;?>
                        </td>
                    </tr>
                    
                    <?php } ?>
              </table>
            </div>
    <div class="VoidPart" style="alignment-adjust: auto; float: right; width: 49%;">
        <p>HOLA TRONGO</p>
    </div>
    
</div>
            