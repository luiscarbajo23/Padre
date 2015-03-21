<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    </head>
    <body onload="document.thisform.firstname.focus()">
    <div style="text-align: center;">
        <h1>Metaleris</h1>
        <div>
            <form name="thisform" action="/Login/checkPassword" method="post">
                <?php echo USER_VIEW; ?>: <input type="text" tabindex=1 name="Parameter1" /><br>
                <?php echo PASSWORD_VIEW; ?>: <input type="password" tabindex=2 name="Parameter2" /><br>    
                <input type="submit" name="submit" tabindex=3 value="<?php echo SUBMIT_VIEW; ?>" />
            </form>
        </div>
    </div>
</html>

