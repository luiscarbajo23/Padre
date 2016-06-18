<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="<?php echo URL . "css/introduceMold.css"?>">

<div class="containerTable">
    <div class="OrderTable" style="alignment-adjust: auto; float: left; width: 49%;">
        <p><?php echo INTRODUCE_MOLD_TEXT ?></p>
        <form name="thisform" action="/MainPage/index" method="post">
            <textarea id="MoldText" class="text" cols="15" rows ="1" name="MoldText"></textarea>
            <input type="submit" name="actionTrigered" value="MoldText" <?php echo SUBMIT_VIEW ?>>
        </form>
    </div>
    <div class="VoidPart" style="alignment-adjust: auto; float: right; width: 49%;">
<!--        <p>HOLA TRONGO</p> -->
    </div>
</div>

