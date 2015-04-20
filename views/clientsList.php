<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/clientsTable.css"?>">

<div class="ClientsTable" >
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
            