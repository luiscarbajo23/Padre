<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<body>
<h2 style="text-align: center;"><span style="font-size:36px;">Metaleris</span></h2>

<form action="<?php echo $config["URL"] . $config["login_controller"]?>" enctype="text/plain" method="post" name="login">
    <p style="text-align: center;">User:<input maxlength="10" name="Parameter1" type="text" /></p>

    <p style="text-align: center;">Password:<input maxlength="10" name="Parameter2" type="password" /></p>
    <input type="submit">
</form>
</body>
</html>

