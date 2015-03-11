<?php

/*
 *  @author: Luis
 */




global $database;

$database =  array();
$database["production"]['username'] = '***';
$database["production"]['password'] = '***';
$database["production"]['database'] = '***';


$database["development"]['username'] = '***';
$database["development"]['password'] = '***';
$database["development"]['database'] = '***';


$env = $_SERVER["ENVIRONMENT"];

$db =  array();

$db["username"] = $database[$env]["username"]; 
$db["password"] =  $database[$env]["password"];
$db["database"]  = $database[$env]["database"];