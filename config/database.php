<?php

/*
 *  @author: Luis
 */




$database;

$database =  array();
$database["production"]['username'] = '***';
$database["production"]['password'] = '***';
$database["production"]['database'] = '***';
$database["production"]['server'] = '***';


$database["development"]['username'] = '***';
$database["development"]['password'] = '***';
$database["development"]['database'] = '***';
$database["development"]['server'] = '***';


$env = $_SERVER["ENVIRONMENT"];

global $db;

$db= [];

$db["username"] = $database[$env]["username"]; 
$db["password"] =  $database[$env]["password"];
$db["database"]  = $database[$env]["database"];
$db["server"]  = $database[$env]["server"];