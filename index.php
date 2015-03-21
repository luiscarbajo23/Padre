<?php
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', '1');
    $errmsg = "POST is:<br>";
    foreach($_POST as $k=>$v)
    $errmsg .= "$k is $v<br>";
    
    if (isset($_POST['submit']))
    {
      //  if (isset($_POST['lastname'], $_POST['lastname']))
       // {
            echo "GET: ";            var_dump($_GET);
            echo "isset is true<br>";
            echo "Entered values are:<br>";
            echo("First name: '" . $_POST['firstname']."' - " .
            strlen($_POST['firstname'])." chars long<br />");
            echo("Last name: '" . $_POST['lastname']."' - " .
            strlen($_POST['lastname'])." chars long <br />");
            echo $errmsg; 
        //}
    }
else
{
    $code=<<<heredocs
<html>
<head>
</head>
<body onload="document.thisform.firstname.focus()">
<div style="text-align: center;">
<h1>Metaleris</h1>
<div>
<form name="thisform" action="/login/checkPassword" method="post">
  Usuario: <input type="text" tabindex=1 name="Parameter1" /><br>
Password: <input type="password" tabindex=2 name="Parameter2" /><br>
</div>
<input type="submit" name="submit" tabindex=3 value="Submit" />
</form>
 </div>
$errmsg
</body>
</html>
heredocs;
echo $code;
}
exit();