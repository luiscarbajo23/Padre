<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/introduceOrder.css"?>">

<div class="containerTable">
    <div class="OrderTable" style="alignment-adjust: auto; float: left; width: 49%;">
        <p><?php echo INTRODUCE_ORDER_TEXT ?></p>
        <form name="thisform" action="/MainPage/index" method="post">
            <textarea id="orderText" class="text" cols="100" rows ="20" name="orderText"></textarea>
            <input type="submit" name="actionTrigered" value="<?php echo SHOW_ORDER ?>" <?php echo SUBMIT_VIEW ?>>
        </form>
    </div>
    <div class="VoidPart" style="alignment-adjust: auto; float: right; width: 49%;">
        <p>HOLA TRONGO</p>
    </div>
    
</div>
            