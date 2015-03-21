<?php

$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = substr( $language, 0, 2);


switch ($language) {
    case "es":
        
        define("USER_VIEW", "Usuario");
        define("SUBMIT_VIEW", "Entra");
        define("REGEX_FAIL", "La password contiene caracteres no validos");
        define("PASS_FAIL", "La password no es correcta");
        break;

    //English default
    default:
        define("SUBMIT_VIEW", "Submit");
        define("USER_VIEW", "User");
        define("REGEX_FAIL", "The password contains invalid characters");
        define("PASS_FAIL", "The password is incorrect");
        break;
}



//Common languages

define("PASSWORD_VIEW", "Password");





