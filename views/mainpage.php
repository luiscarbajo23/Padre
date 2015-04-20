<!doctype html>
<html>
<head>
	<title>HTML Editor - Full Version</title>
</head>
<body>
<p style="text-align: center;"><strong><?php echo COMPANY_NAME?></strong></p>

<p style="text-align: center;">&nbsp;</p>

<div>
    <form name="thisform" action="/MainPage/index" method="post">
        <input type="submit" tabindex=1 name="actionTrigered" value="<?php echo CLIENTS_LIST ?>"/><br>
        <input type="submit" tabindex=2 name="actionTrigered" value="<?php echo INTRODUCE_ORDER ?>" /><br>    
        <input type="submit" name="actionTrigered" tabindex=3 value="<?php echo CONSULT ?>" />
    </form>
</div>
</body>
</html>
