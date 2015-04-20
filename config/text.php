<?php

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) $language = "en";
else {
    $language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $language = substr($language, 0, 2);
}

switch ($language) {
    case "es":
        
        define("USER_VIEW", "Usuario");
        define("SUBMIT_VIEW", "Entra");
        define("REGEX_FAIL", "La password contiene caracteres no validos");
        define("PASS_FAIL", "La password no es correcta");
        define("NOT_AUTHORIZED", "Fallo en autenticacion");
        define("CLIENTS_LIST", "Listado de clientes");
        define("INTRODUCE_ORDER", "Introducir Pedido");
        define("CONSULT", "CONSULTA");
        define("CLIENT_ID", "Identificador");
        define("CLIENT_NAME", "Nombre");
        break;

    //English default
    default:
        define("SUBMIT_VIEW", "Submit");
        define("USER_VIEW", "User");
        define("REGEX_FAIL", "The password contains invalid characters");
        define("PASS_FAIL", "The password is incorrect");
        define("NOT_AUTHORIZED", "Fail in authentication");
        define("CLIENTS_LIST", "List of clients");
        define("INTRODUCE_ORDER", "Introduce order");
        define("CONSULT", "Consult");
        define("CLIENT_ID", "Identifier");
        define("CLIENT_NAME", "Name");
        break;
}



//Common languages

define("PASSWORD_VIEW", "Password");
define("COMPANY_NAME", "Metaleris");






