<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "tvet_guide";

$Connector = new mysqli($serverName, $userName, $password, $databaseName); //connect database to variable

//check database connect or not
if($Connector->connect_error) {
    die("Connection is failed".$Connector->connect_error);
}

