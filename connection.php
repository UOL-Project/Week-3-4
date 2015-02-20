<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 // Handling of the error message, all are passed for debugging purposes
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);

//PDO connection is used to initiate server connection
try {
$servername = "laureatestudentserver.com";
$username = "laureate_IN103";
$password = "9ock4nyWV4XJ";
$dbname = "laureate_IN103";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

//Create connection
$DBPDO = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password, $opt);
$DBPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}

//Check connection
catch (Exception $state){
    echo $state->getMessage();
}
